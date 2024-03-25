 


<table class="table table-striped">
    <thead style="background-color: #000;color: #fff;">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $utilizadores = Listar('adms_usuarios');
        //var_dump($utilizadores);
      
        foreach ($utilizadores as $utilizador):
            //var_dump($utilizador);}
            ?>
            <tr>


                <td><?= $utilizador->nome; ?></td>
                <td><?= $utilizador->apelido; ?></td>
                <td><?= $utilizador->email; ?></td>
                <td><?= $utilizador->usuario; ?></td>
                <td><?= $utilizador->senha; ?></td>
                <td><a href="?pagina=EditarUtilizador&id=<?= $utilizador->id;?>" class="btn btn-success">Editar</td>
                <td><a href="?id=<?= $utilizador->id ?>&elim=true" class="btn btn-danger" > Eliliminar</a></td>

            </tr>
        <?php endforeach; ?>

    </tbody>
</table>