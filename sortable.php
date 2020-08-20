<?php

require_once __DIR__."/configDb.php";

$post = filter_input(INPUT_POST,"arrayOrdem",FILTER_SANITIZE_NUMBER_INT);

if(isset($post))
{
    $ordem_position = $post;

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

    

