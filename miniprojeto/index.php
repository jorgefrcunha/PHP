<?php declare(strict_types=1) ?>
<?php require_once './Config.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trabalhar com PDO</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <br><!-- comment -->
<br><!-- comment -->
         
<a href="<?= HOME; ?>" class="btn btn-success">Home</a>
<a href="?pagina=RegistarUtilizadores" class="btn btn-danger">Registar Utilizadores</a>

<br><!-- comment -->
<br><!-- comment -->
<!--<a href="?pagina=RegistarUtilizadores" class="btn btn-success">Home</a>-->



          
            <?php require (isset($_GET['pagina'])) ? carregar($_GET['pagina']) : './admin/visao/paginas/home.php';?>
        
    
</html>


