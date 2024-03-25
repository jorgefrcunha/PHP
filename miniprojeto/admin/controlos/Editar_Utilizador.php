<?php

if (isset($_POST['Editar_Utilizadores'])) {
    $utilizador = filter_input(INPUT_POST, 'utilizador', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    //$utilizadorRegistado = find('adms_usuarios', 'id', $id, 'find');
   //var_dump( $utilizadorRegistado);
    
    $atualizarUtilizador = atualizar($utilizador, $id);
    echo ($atualizarUtilizador == 1) ? 'Utilizador atualizada ' : 'Erro ao atualizar o utilizador';
}