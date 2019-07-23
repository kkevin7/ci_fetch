<div class="container-fluid content-margin">
    <div class="row">
        <div class="col-sm-4">
            <form method="post" class="form-cancion" id="form-cancion">
                <h2 class="text-center">Canciones</h2>
                  <input type="hidden" class="form-control" name="id" id="" aria-describedby="helpId" placeholder="">
                <div class="form-group">
                  <label for="">Titulo</label>
                  <input type="text"
                    class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Autor</label>
                  <input type="text"
                    class="form-control" name="autor" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Duracion</label>
                  <input type="time"
                    class="form-control" name="duracion" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group" id="div-estado" style="display: none">
                  <label for="">Estado</label>
                  <select class="form-control" name="estado" id="">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
                </div>
                <button type="button" id="btn-add" class="btn btn-primary" value="agregar" >Agregar</button>
                <button type="button" id="btn-edit" class="btn btn-success" value="editar"  style="display: none">Modificar</button>
                <button type="reset" id="btn-cancel" class="btn btn-secondary">Cancelar</button>
            </form>
        </div>
        <div class="col-sm-8">
            <table class="table table-hover table-sm table-bordered text-center">
                <thead style="background: hsl(0, 0%, 79%);">
                    <tr>
                        <th>TITULO</th>
                        <th>AUTOR</th>
                        <th>DURACION</th>
                        <th>ESTADO</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody id="tbody-content">

                </tbody>
            </table>
        </div>
    </div>
</div>