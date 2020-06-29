<?php 

$host ='localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conexao = new MySQLi($host, $user, $pass, $db_name);

if ($conexao->connect_error){
    die('Database connection error: ' . $conexao->connect_error);
}
