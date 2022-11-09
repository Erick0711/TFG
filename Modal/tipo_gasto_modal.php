
<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarTipoModal" tabindex="-1" aria-labelledby="gastoTipoLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title text-center" id="gastoTipoLabel">Formulario Gasto</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./App/Modelo\Gasto.php" method="POST">
            <div class="row  mt-2">

                <div class="col-md-12">
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Tipo de gasto...">
                </div>
                <div class="col-md-12">
                </div>

            </div>

            <div class="row  mt-2">

                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" name="guardar" class="btn btn-primary btn-block">Registrar</button>
                </div>
                
            </div>
        </form>
        </div>
    <!-- FIN CONTENIDO DEL MODAL -->
    <table class="table table-bordered mt-5 table-sm">
        <thead class="table-dark text-center">
            <th>#</th>
            <th>TIPOS DE GASTO</th>
        </thead>
        <tbody class="table-borderless">
            <?php foreach($tipos as $tipo){ ?>
            <tr>
                <td><?php echo $tipo['id'] ?></td>
                <td><?php echo $tipo['nombre'] ?></td>
            </tr>
            <?php }; ?>
        </tbody>
    </table>
    </div>
    </div>
</div>
</div>