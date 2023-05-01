<?php
$user = 'root';
$senha = '';
$db = 'db_projetophp';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $senha, $db);
$result = $mysqli->query("SELECT * FROM user");

if($mysqli->error){
    die("Erro de Conexão" . $mysqli->error);
}
//conexão do banco com extensão mysqli