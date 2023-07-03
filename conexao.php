<?php

$usuario = 'root';
$senha = '';
$database = 'tech';
$host = 'localhost';

$conexao = new mysqli($host, $usuario, $senha, $database);
//criando conexao
if($conexao->connect_error)
{
    printf('Erro de cone');
    die('Error de conexao: ' . $conexao->error);
    //error de conexao;
}

