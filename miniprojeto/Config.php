<?php
ini_set('display_erros', 1);
//FUNCÇÕES DO BASE DE DADOS
require './admin/modelos/basedados/Conexao.php';
require './admin/modelos/basedados/ListarPDO.php';
require './admin/modelos/EliminarPDO.php';
require './admin/modelos/RegistarPDO.php';
require './admin/modelos/AtualizarPDO.php';
require './admin/modelos/basedados/findPDO.php';
require './admin/modelos/basedados/EditarPDO.php';


//INCLUDES DA BASE DE DADOS
require './admin/visao/paginas/rotas.php';

//INCLUDES DA BASE DE DADOS
require './admin/controlos/Eliminar_Utilizadores.php';
require './admin/controlos/Registar_Utilizadores.php';
require './admin/controlos/Editar_Utilizador.php';

