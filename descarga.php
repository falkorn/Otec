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
    <!-- Owl Carousel core CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
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

    </div>
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li <?php if ($pagina == "inicio")    {echo "class = 'active'";} ?> ><a href ="index.php" alt="Torres Propiedades"><span></span> Inicio</a></li>
      <li <?php if ($pagina == "nosotros")  {echo "class = 'active'";} ?> ><a href ="#nosotros" alt="Nosotros"><span></span> Nosotros</a></li>
      <li <?php if ($pagina == "ventas")    {echo "class = 'active'";} ?> ><a href ="#cursos" alt="Cursos"><span></span> Cursos</a></li>
      <li <?php if ($pagina == "arriendos") {echo "class = 'active'";} ?> ><a href ="#servicios" alt="Servicios"><span></span> Servicios</a></li>
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


<!-- Jumbotron
================================================== -->
<div class="jumbotron">
  <!-- Imagen -->
  <img class="fondo" src="img/Slider1.jpg">

  <div class="container">
      <div class="col-sm-6 col-sm-offset-3">
      <img src="img/Logo_MD.png" class="logo">
      </div>
  </div>

</div><!-- /.jumbotron -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


<div id="owl-demo">
  <div class="item"><img src="img/gob.jpg" alt="Lazy Owl Image"></div>
  <div class="item"><img src="img/sence.jpg" alt="Lazy Owl Image"></div>
  <div class="item"><img src="img/bono.jpg" alt="Lazy Owl Image"></div>
  <div class="item"><img src="img/empresa.jpg" alt="Lazy Owl Image"></div>
  <div class="item"><img src="img/iso.jpg" alt="Lazy Owl Image"></div>
</div>


<div class="container marketing">



  <!-- Tres Columnas despues del Jumbotron -->
  <!--  <div class="row">
    <div class="col-lg-4">
      <img class="img-circle" src="img/d3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
      <h2>Aprende</h2>
      <p>Galardonados con el premio a la mejor OTEC 2014. Estudia con Nosotros</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
      <img class="img-circle" src="img/d5.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
      <h2>Certificaté</h2>
      <p>Potencia tus conocimientos e ingresos.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
      <img class="img-circle" src="img/d9.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
      <h2>Somos Profesionales</h2>
      <p>Contamos con un equipo dispuesto a satisfacer tus necesidades.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div> -->


</div><!-- /.container -->

    

<div class="container marketing">
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Uso y Manejo de Plaguicidas.</h2>
          <p class="lead">Orientado a trabajadores que están relacionados o potenciales a ejecutar labores con plaguicidas en sus actividades. Curso que dura 30 horas y permite acceder credencial SAG, certificado y franquicia Sence.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/c9.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/c1.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Prevención de Riegos Para Trabajadores Agrícola.</h2>
          <p class="lead">Orientado a agricultores, profesionales y estudiantes relacionados con actividades agrícola demandante de agua riego y que están enfrentados a situación de restricción hídrica en sus cultivos. Duración 24 horas y permiten acceder a diploma de participación.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Mas Cursos disponibles.</h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/p1.jpg" alt="Generic placeholder image">
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
    <!-- Include Owl Carousel js plugin -->
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $("#owl-demo").owlCarousel({
            items : 5,
            autoPlay: 3000
          }); 
        });
    </script>
  </body>
</html>
