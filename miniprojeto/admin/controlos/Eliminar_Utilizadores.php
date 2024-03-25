<?php

if (isset($_GET['elim']) && $_GET['elim'] == 'true') {
    $eliminar = Eliminar('id', $_GET['id'],'adms_usuarios');
    if($eliminar) {
        echo 'Eliminado com ssucsso';
    } else {
        echo 'Erro ao eliminar';
    }
}