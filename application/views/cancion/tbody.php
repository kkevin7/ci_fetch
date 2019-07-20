<tr>
            <!-- rcorriendo el arreglo -->
                <?php foreach($canciones as $cancion){
                    ?>
                    <form method="post">
                        <!-- Mostrando los datos -->
                    <tr <?= $cancion->estado ? 'style="background: green"' : 'style="background: red"' ?>>
                        <td><?= $cancion->titulo ?></td>
                        <td><?= $cancion->autor ?></td>
                        <td><?= $cancion->duracion ?></td>
                        <td><?= $cancion->estado ? 'Activo' : 'Inactivo' ?></td>
                        <td><button class="btn btn-warning btn-mostrar" value="<?= $cancion->id ?>">Editar</button></td>
                        <td><button class="btn btn-danger btn-delete" value="<?= $cancion->id ?>">Eliminar</button></td>
                    </tr>
                    </form>
                <?php } ?>
            </tr>