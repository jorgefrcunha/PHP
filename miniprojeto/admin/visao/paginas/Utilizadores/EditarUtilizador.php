<?php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT );
$editarUtilizador = find('adms_usuarios', 'id',$id,'editar');
?>
<form method="post" action="">
    <input type="hidden" name="Editar_Utilizadores">
    <div class="form-group"><!-- comment -->
        <label for="utilizador">Utilizadores</label><!-- comment -->
        <input type="text" class="form-control" name="utilizador" value="<?=$editarUtilizador->nome; ?>" placeholder="Utilizadores" >
        
        </div>
    
    <button type="submit" class="btn btn-primary">Editar Utilizadores</button>
</form>
