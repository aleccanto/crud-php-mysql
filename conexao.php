<?php

$host = "localhost";
$usuario = "user1";
$senha = "";
$db = "";

$mysqli = new mysqli($host, $usuario, $senha, $db);

if ($mysqli->connect_errno) {
    echo "erro ao conectar ao banco de dados: (" . $mysqli->connect_errno .
        ") " . $mysqli->connect_error;
} else {
    echo "Conexão bem sucedida com o Banco de Dados!";
}
