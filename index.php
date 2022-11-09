<?php include("./plantilla/header.php"); ?>

    <!-- CONTENIDO -->
    <main class="app-content">
      <div class="app-title">
<!--   
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul> -->
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Corpropietarios</h4>
              <p><b>200</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Pagos realizados</h4>
              <p><b>125</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-money fa-3x"></i>
            <div class="info">
              <h4>Pagos por cobrar</h4>
              <p><b>75</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-thumbs-down fa-3x"></i>
            <div class="info">
              <h4>Multas</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Egreso</h4>
              <p><b>10011</b> BS</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Ingreso</h4>
              <p><b>12505</b> BS</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-money fa-3x"></i>
            <div class="info">
            <h4>Saldo acumulado</h4>
              <p><b>2.494</b> BS</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-thumbs-down fa-3x"></i>
            <div class="info">
              <h4>Recidentes totales</h4>
              <p><b>305</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Monthly Sales</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include("./plantilla/footer.php"); ?> 