<?php

if (isset($_POST['Registar_Utilizadores'])) {
    $utilizador = $_POST['utilizador'];
    $verificarExiste = find('adms_usuarios', 'nome', $utilizador);
    //var_dump($verificarExiste);
    if (count($verificarExiste) == 1) {
        echo 'Utilizador já se  encontra registado!';
    } else {


        $registarUtilizadores = registar('adms_usuarios', $utilizador);
        //var_dump($registarUtilizadores);
//    if ($registarUtilizadores){
//        echo 'Utilizador registado com sucesso!';
//    }
        //OU 
        echo ($registarUtilizadores) ? '<p class="bg-sucess">Utilizador Registado com Sucesso</p>' : 'Erro ao Registar Utilizador';
        sleep(1);
        header("Location:" . HOME);
    }
}