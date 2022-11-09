<?php include("./plantilla/iniciar_session.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>.:: SIAC ::.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/img/Logo-siac.jpg">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animate.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="./">Sevilla</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Buscar">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
 
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <!-- <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li> -->
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="./plantilla/eliminar_session.php"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="./assets/img/Logo-siac.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['nombre_rol']?></p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['nombre_rol']?></p>
        </div>
      </div>
      <!-- LISTA DE MENU -->
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="./"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Inicio</span></a></li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li> -->
        <!-- <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Formularios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">

          <?php if($_SESSION['nombre_rol'] == "SIAC") {?>
            <li><a class="treeview-item" href="./copropietario"><i class="icon fa fa-circle-o"></i> Copropietario</a></li>
            <li><a class="treeview-item" href="./funcionario"><i class="icon fa fa-circle-o"></i> Funcionario</a></li>
            <li><a class="treeview-item" href="./usuario"><i class="icon fa fa-circle-o"></i> Usuario</a></li>
            <li><a class="treeview-item" href="./gasto"><i class="icon fa fa-circle-o"></i> Gasto</a></li>
            <li><a class="treeview-item" href="./articulo"><i class="icon fa fa-circle-o"></i> Artículo</a></li>
            <?php }else{?>
              <li><a class="treeview-item" href="./copropietario"><i class="icon fa fa-circle-o"></i> Copropietario</a></li>
            <?php }?>

          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tablas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.php"><i class="icon fa fa-circle-o"></i>Tabla copropietario</a></li>
            <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-circle-o"></i>Tabla Funcionario</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i>Tabla Pago</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i>Tabla Usuario</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i>Tabla Gasto</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" target="_blank" href="./manual.php"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Manual</span></a></li>
      </ul>
    </aside>