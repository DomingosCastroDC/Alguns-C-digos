<?php

/**
 * @param $config[] Array de configuração do banco de dados
 * @method $conexao Metódo de conexão com o banco de dados
 */
function conexao(array $config)
{
    $dsn = $config['dsn'] ?? "";
    $user = $config['user'] ?? "";
    $password = $config['password'] ?? "";

    $conexao = new PDO($dsn,$user,$password);

    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    return $conexao; 
}