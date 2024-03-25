<?php

function Eliminar($campo,$valor,$tabela) {
     $pdo = conectar();

    $sql = "delete from $tabela where $campo = ?";
    $eliminar = $pdo->prepare($sql);
    $eliminar->bindValue(1, $valor);

    return $eliminar->execute();
    
    if($eliminar->rowCount() > 0) {
        return true;
    }
    return false;
}
