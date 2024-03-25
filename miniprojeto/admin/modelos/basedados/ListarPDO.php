<?php
function Listar($tabela) {
    $pdo = conectar();
    $sql = "select * from $tabela";

    $listar = $pdo->prepare($sql);

    $listar->execute();

    return $listar->fetchAll();
    
}


//function all() {
//    $sql = "select * from {$this->table}";
//
//    $list = $this->connection->prepare($sql);
//
//    $list->execute();
//
//    return $list->fetchAll();
//}