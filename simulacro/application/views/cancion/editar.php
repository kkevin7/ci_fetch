<!-- Forumario de canciones -->
<h1 class="text-center">Canciones</h1>
<div class="form-group">
    <!-- Titulos -->
    <label for="">Titulo</label>
    <input type="text" value="<?= $entity->titulo ?>" class="form-control col-sm-10" maxlength="25" name="titulo" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="form-group">
    <!-- Autores -->
    <label for="">Autor</label>
    <input type="text" value="<?= $entity->autor ?>" class="form-control col-sm-10" maxlength="45" name="autor" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="form-group">
    <!-- Duracion -->
    <label for="">Duracion</label>
    <input type="time" value="<?= $entity->duracion ?>" class="form-control col-sm-10" maxlength="25" name="duracion" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="form-group">
    <label for="">Estado</label>
    <select class="form-control col-sm-10" value="<?= $entity->estado ?>" name="estado">
        <?php if ($entity->estado == 1) { ?>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        <?php } else { ?>
            <option value="0">Inactivo</option>
            <option value="1">Activo</option>
        <?php } ?>
    </select>
</div>
<div class="form-group">
    <!-- boton de editar -->
    <button type="submit" class="btn btn-success" id="btn-edit">Modificar</button>
    <button type="reset" class="btn btn-secondary" id="btn-reset" >Cancelar</button>
</div>