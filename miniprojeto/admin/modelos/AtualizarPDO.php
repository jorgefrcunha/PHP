<?php

function atualizar($utilizador,$id) {

    $pdo = conectar();

    $sql = "update adms_usuarios set nome = ? where id = ?";
    $atualizar = $pdo->prepare($sql);
    $atualizar->bindValue(1, $utilizador);
    $atualizar->bindValue(2, $id);

    $atualizar->execute();

    return $atualizar->rowCount();
}
