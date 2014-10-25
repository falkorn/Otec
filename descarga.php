<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Nicolas Ulloa">
    <link rel="icon" href="img/favicon.ico">

    <title>Otec</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

<div class="navbar-wrapper" <?php  $pagina = "inicio"; ?>>
<div class="container">
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">Otec</a>
    </div>
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li <?php if ($pagina == "inicio")    {echo "class = 'active'";} ?> ><a href ="index.php" alt="Torres Propiedades"><span></span> Inicio</a></li>
      <li <?php if ($pagina == "nosotros")  {echo "class = 'active'";} ?> ><a href ="#nosotros" alt="Nosotros"><span></span> Nosotros</a></li>
      <li <?php if ($pagina == "ventas")    {echo "class = 'active'";} ?> ><a href ="#cursos" alt="Cursos"><span></span> Ventas</a></li>
      <li <?php if ($pagina == "arriendos") {echo "class = 'active'";} ?> ><a href ="#servicios" alt="Servicios"><span></span> Arriendos</a></li>
      <li <?php if ($pagina == "contacto")  {echo "class = 'active'";} ?> ><a href ="contacto.php" alt="Contacto"><span></span> Contacto</a></li>          
  
            <li class="dropdown">
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
            </li>
          </ul>
        </div>
  </div>
  </div>
</div>
</div>


<!-- Jumbotron
================================================== -->
<div class="jumbotron" id="inicio" <?php if ('id' == "inicio") {$pagina = "inicio";} ?> >
  <!-- Imagen -->
  <img src="img/Slider1.jpg" alt="First slide">

  <div class="container">
      <div class="carousel-caption">
      <h1>Otec de Juvenal</h1>
      <p>Llena de cursos y de informacion muy interesante</p>
      <p><a class="btn btn-lg btn-primary" href="#" role="button">Registrate!</a></p>
      </div>
  </div>

</div><!-- /.jumbotron -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing" id="nosotros" <?php if ('id' == "nosotros") {$pagina = "nosotros";} ?> >

  <!-- Tres Columnas despues del Jumbotron -->
  <div class="row">
    <div class="col-lg-4">
      <img class="img-circle" src="img/d3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
      <h2>Aprende</h2>
      <p>Galardonados con el premio a la mejor OTEC 2014. Estudia con Nosotros</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="img/d5.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
      <h2>Certificaté</h2>
      <p>Potencia tus conocimientos e ingresos.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="img/d9.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
      <h2>Somos Profesionales</h2>
      <p>Contamos con un equipo dispuesto a satisfacer tus necesidades.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
</div><!-- /.container -->
    

<div class="container marketing">
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Riego en tiempos de sequia. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/c4.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/c4.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/c4.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
