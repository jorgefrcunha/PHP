<?php

function editar($tabela,$campo,$valor){
    $pdo = conectar();
    $sql = "select * from $tabela where $campo = ?";
    $find = $pdo->prepare($sql);
    $find->bindValue(1,$valor);
    $find->execute();
    return $find->fetch();
}