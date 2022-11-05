<?php include("./plantilla/header.php"); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Funcionario</h1>
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
            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarModal"><i class="fa fa-user-plus fa-3x"></i></a>
            </div>
            </div>
            <div class="table-responsive">  
              <table class="table table-bordered">
                <thead class="text-center">
                  <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CI</th>
                    <th>TELEFONO</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th>ACCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>6897451</td>
                    <td>ADMINISTRADOR</td>
                    <td>2150.00 <b>BS</b></td>
                    <td>
                      <a href="" class="btn btn-warning-2" data-toggle="modal" data-target="#editarModal"><i class="fa fa-pencil-square"></i></a>
                      <a href="" class="btn btn-danger"><i class="fa fa-trash fa-3x"></i></a>
                  </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include("./Modal/funcionario_modal.php"); ?> 
    <?php include("./plantilla/footer.php"); ?> 