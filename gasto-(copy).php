<?php 
  require($_SERVER['DOCUMENT_ROOT']."/TFG/App/Modelo/Gasto.php"); 
  include("./plantilla/header.php"); 
  ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Gasto</h1>
          <p></p>
        </div>
      </div>
      
      <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
            <div class="title-item">

            <input type="search" class="search p-1 border-secondary rounded w-25" placeholder="Buscar">

            <div class="text-center">
            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarModal"><i class="fa fa-plus" ></i> Nuevo Gasto</a>
            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarTipoModal"><i class="fa fa-plus" ></i> Tipo de Gasto</a>
            </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="text-center">
                  <tr>
                    <th>#</th>
                    <th>TIPO GASTO</th>
                    <th>DESCRIPCION</th>
                    <th>MONTO</th>
                    <th></th>
                    <th>ACCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($gastos as $gasto){
                  if($gasto['estado'] == 1){
                  ?>
                  <tr>
                    <td><?php echo $gasto['id']?></td>
                    <td><?php echo $gasto['nombre']?></td>
                    <td><?php echo $gasto['descripcion']?></td>
                    <td><?php echo $gasto['monto_gasto']?></td>
                    <th>BS</th>
                    <td>
                      <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModalGasto"><i class="fa fa-pencil-square"></i></a>
                      <a href="./App/Modelo/Gasto.php?eliminar=<?php echo $gasto['id'] ;?>" class="btn btn-danger" name="eliminar" ><i class="fa fa-trash fa-3x"></i></a>
                  </td>
                  </tr>
                  <?php 
                    };
                  };?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include("./Modal/gasto_modal.php"); ?> 
    <?php include("./Modal/tipo_gasto_modal.php"); ?> 
    <?php include("./plantilla/footer.php"); ?> 

