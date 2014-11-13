<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nicolas Ulloa">
    <link rel="icon" href="img/favicon.ico">

    <title><?php echo $tituloPagina; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Owl Carousel core CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

<div class="navbar-wrapper">
<div class="container">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li <?php if ($pagina == "inicio")    {echo "class = 'active'";} ?> ><a href ="index.php" alt="Inicio"><span></span> Inicio</a></li>
      <li <?php if ($pagina == "nosotros")  {echo "class = 'active'";} ?> ><a href ="nosotros.php" alt="Nosotros"><span></span> Nosotros</a></li>
      <li <?php if ($pagina == "cursos")    {echo "class = 'active dropdown'";} ?> >
      <a href ="cursos.php" alt="Cursos" class="dropdown-toggle" data-toggle="dropdown"><span></span> Cursos</a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="curso_uso_y_manejo_de_plaguicidas.php">Uso y manejo de plaguicidas</a></li>
          <li><a href="curso_prevencion_de_riesgos_para_trabajadores_agricolas.php">Prevencion de riesgos para trabajadores agricolas</a></li>
          <li><a href="curso_mejoramiento_en_el_uso_de_agua_riego_disponible.php">Mejoramiento en el uso de agua riego disponible</a></li>
        </ul>
      </li>
      <li <?php if ($pagina == "servicios") {echo "class = 'active'";} ?> ><a href ="servicios.php" alt="Servicios"><span></span> Servicios</a></li>
      <li <?php if ($pagina == "contacto")  {echo "class = 'active'";} ?> ><a href ="contacto.php" alt="Contacto"><span></span> Contacto</a></li>          
  
        <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Desplegable <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
              </ul>
              </li>  -->
    </ul>
    </div>
  </div>
  </div>
</div>
</div>