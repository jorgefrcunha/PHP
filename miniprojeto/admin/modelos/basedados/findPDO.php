<?php

function find($tabela, $campo,$valor, $editar = null){
    $pdo = conectar();
    $sql = "select * from $tabela where $campo= ?";
    $find = $pdo->prepare($sql);
    $find->bindValue(1, $valor);
    $find->execute();
    return ($editar == null) ? $find->fetchAll(): $find->fetch();
}