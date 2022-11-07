<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" action="index.html">
        <div class="logo d-flex justify-content-center">
        <img src="./assets/img/logo-nuevo.png" alt="Logo-SIAC" class="logo-siac">
      </div>
          <div class="form-group">
            <label class="control-label">Usuario:</label>
            <input class="form-control" type="text" placeholder="..." autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Contraseña:</label>
            <input class="form-control" type="password" placeholder="...">
          </div>
        
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Ingresar</button>
          </div>
        </form>
    
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="./assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      $('.login-box').toggleClass('flipped');
      return false;
      });
    </script>
  </body>
</html>