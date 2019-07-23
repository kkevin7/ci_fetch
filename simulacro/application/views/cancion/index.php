<div class="container-fluid">
<h1 class="text-center">YOU MUSIC FETCH</h1>
    <div class="row" id="content">

        <div class="col-sm-4">
            <!-- Forumario de canciones -->
            <form id="formulario" method="POST"></form>
        </div>

        <div class="col-sm-8">
            <!-- tabla para mostrar registos -->
            <table class="table table-sm table-bordered table-hover text-center">
                <thead class="tb-header">
                    <tr>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Duracion</th>
                        <th>Estado</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <!-- contenido de la tabla -->
                <tbody id="tbody-content" ></tbody>
            </table>
        </div>

    </div>

</div>
<!-- importacion del javascript -->
<script src="<?= base_url(); ?>/assets/js/script.js"></script>