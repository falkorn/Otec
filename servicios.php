<?php  
$tituloPagina = "Servicios - Jb eirl Capacitación Agrícola";
$pagina = "servicios"; 
include('php/header.php');
?>


<!-- Jumbotron
================================================== -->
<div class="jumbotron">
  <!-- Imagen -->
  <img class="fondo" src="img/Slider1.jpg">

  <div class="container">
      <div class="col-sm-6 col-sm-offset-3">
      <img src="img/Logo.png" class="logo">
      </div>
  </div>

</div><!-- /.jumbotron -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


  <div id="owl-demo">
    <div class="item"><img src="img/banner2.jpg" alt="Lazy Owl Image"></div>
    <div class="item"><img src="img/banner1.jpg" alt="Lazy Owl Image"></div>
    <div class="item"><img src="img/banner4.jpg" alt="Lazy Owl Image"></div>
    <div class="item"><img src="img/banner3.jpg" alt="Lazy Owl Image"></div>
    <div class="item"><img src="img/banner5.jpg" alt="Lazy Owl Image"></div>
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
      <div class="container">
      <div class="col-sm-4 col-sm-offset-4">
        <img class="banner-footer" src="img/banner_footer.jpg">
      </div>     
      </div>  
      <p>&nbsp;</p>
      <div class="rowfluid">
        <p class="text-center">info@capacitacionagricola.cl</p>
        <p class="text-center">Freire N°751, Of.3 - Telefono: (034)2382013 - 96829516</p>  
      </div> 
      <div class="rowfluid">
        <p class="pull-left">Capacitación Agrícola Jb eirl 2014.</p>  

        <p class="pull-right">Diseñado por <a href="https://twitter.com/nicolas_ulloa_t">@nicolas_ulloa_t</a></p>
      </div>   

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
