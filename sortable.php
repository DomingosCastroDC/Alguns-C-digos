<?php

/** Aqui se encontra o arquivo de configuração do banco de dados */
require_once __DIR__."/configDb.php";

/**
 * @var $post Pega um dado específico  vindo do arquivo js , após uma execução post
 * 
 */



/** Verifica se existe um valor na chave arrayOrdem */
if(isset($_POST['arrayOrdem']))
{
    $ordem_position = $_POST['arrayOrdem'];

    $ordem_conta = 1;
    foreach ($ordem_position as $ordem_id) {
        $sql = "UPDATE cursos SET ordem = :ordem WHERE id = :ordem_position";
        $insert = $conexao->prepare($sql);
        $insert->bindValue(":ordem",$ordem_conta);
        $insert->bindValue(":ordem_position",$ordem_id);

        $insert->execute();
        $ordem_conta ++;
    }
}

    

