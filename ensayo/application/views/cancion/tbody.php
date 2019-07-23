    <?php foreach ($canciones as $cancion) {?>
    <tr>
        <td><?= $cancion->titulo ?></td>
        <td><?= $cancion->autor ?></td>
        <td><?= $cancion->duracion ?></td>
        <td <?= $cancion->estado ? 'style="background: #28a609"' : 'style="background: #d30c11"' ?> ><?= $cancion->estado ? 'Activo' : 'Inactivo' ?></td>
        <td><button type="submit" class="btn btn-danger btn-delete" value="<?= $cancion->id ?>">Eliminar</button></td>
        <td><button type="submit" class="btn btn-warning btn-mostrar" value="<?= $cancion->id ?>">Editar</button></td>
    </tr>
    <?php } ?>