<tr>
            <!-- rcorriendo el arreglo -->
                <?php foreach($canciones as $cancion){
                    ?>
                    <form method="post">
                        <!-- Mostrando los datos -->
                    <tr class="align-middle">
                        <td class="align-middle"><?= $cancion->titulo ?></td>
                        <td class="align-middle"><?= $cancion->autor ?></td>
                        <td class="align-middle"><?= $cancion->duracion ?></td>
                        <td class="align-middle" <?= $cancion->estado ? 'style="background: #09c654"' : 'style="background: #cd6141"' ?>><?= $cancion->estado ? 'Activo' : 'Inactivo' ?></td>
                        <td class="align-middle"><button class="btn btn-warning btn-mostrar" value="<?= $cancion->id ?>">Editar</button></td>
                        <td class="align-middle"><button class="btn btn-danger btn-delete" value="<?= $cancion->id ?>">Eliminar</button></td>
                    </tr>
                    </form>
                <?php } ?>
            </tr>