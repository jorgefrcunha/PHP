<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'nomeBD';
// Criação de uma variável ($conn) com a ligação à BD 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Teste de erro na ligação com feedback do erro - não é obrigatório!
if(mysqli_connect_errno($conn)) {
    echo "Erro na ligação à base de dados: ". mysqli_connect_error();
}

// Especifica o conjunto de caracteres padrão 
// a ser utilizado no envio/receção de dados PHP <-> MySQL.
mysqli_set_charset($conn,"utf8");

