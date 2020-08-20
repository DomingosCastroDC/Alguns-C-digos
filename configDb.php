<?php
require_once __DIR__."/conexao/conexao.php";
/**
 * @var array $config
 * array de Configuraçaõ do banco de dados
 */

$config =  [
    'dsn' => "mysql:host=localhost;dbname=exemplos",
    'user' => "root",
    'password' => ""
];

$conexao = conexao($config);