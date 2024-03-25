<?php
function carregar($pagina) {
    $pastas = ['Utilizadores', 'visao'];
    foreach ($pastas as $pasta) {
        if (is_file('./admin/visao/paginas/' . $pasta . '/' . $pagina . '.php')) {
            $include = './admin/visao/paginas/' . $pasta . '/' . $pagina . '.php';
            //var_dump($include);
        }
    }
    return $include;
}
