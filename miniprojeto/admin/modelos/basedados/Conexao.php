<?php

define("USER", "root");
define("PASS", "");
define("HOST", "localhost");
define("DBNAME", "php_site_gerenciador");
define("HOME", "http://localhost/html5/miniprojeto/");

//CONEXAO COM O BANCO DE DADOS
//function conectar() {
//    $dsn = "mysql:host=" . HOST . ";dbname=" . DBNAME . "";
//    try {
//        $conectar = new PDO($dsn, USER, PASS);
//        $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    } catch (PDOException $e) {
//        echo "Erro ao conectar ao banco " . $e->getMessage();
//    }
//    return $conectar;
//}
//orientada a objetos
function conectar() {
    $pdo = new PDO('mysql:host='.HOST.'; dbname='.DBNAME,USER,PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
    
}