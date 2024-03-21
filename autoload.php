<?php

function _autoloader($classes) {
    $pastas = array(
        'classes/',
        '../classes/',
        './interface/',
        '../interface/',
        'classes/Funcoes/',
        '../classes/Funcoes/',
    );

    foreach ($pastas as $pasta) {
        $fileName = $pasta . $classes . '.php';

        if (file_exists($fileName)) {
            require_once $fileName;
            return; // Encerra a execução depois de encontrar e incluir a classe
        }
    }

    echo "Classe $classes não foi encontrado nenhum ficheiro especific0!";
}

spl_autoload_register('_autoloader');

