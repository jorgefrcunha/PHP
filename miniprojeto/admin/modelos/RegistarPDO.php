<?php

function registar($tabela, $utilizador){
   
     $pdo = conectar();

    $sql = "insert into $tabela (nome) values(?)";
    $registar = $pdo->prepare($sql);
    $registar->bindValue(1, $utilizador);

    $registar->execute();
    
        return $pdo->lastInsertId();
    
}
