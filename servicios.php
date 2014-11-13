<?php  
$tituloPagina = "Servicios - Jb eirl Capacitación Agrícola";
$pagina = "servicios"; 
include('php/header.php');
?>


<!-- =========
     Jumbotron
     ========= -->
<div class="jumbotron">
  <!-- Imagen de fondo -->
  <img class="fondo" src="img/Slider1.jpg">
  <!-- Logo de fondo -->
  <div class="container">
      <div class="col-sm-6 col-sm-offset-3">
      <img src="img/Logo.png" class="logo">
      </div>
  </div>
</div><!-- /.jumbotron -->

<!-- ===================
     Banner de Confianza
     =================== -->
<div id="owl-demo">
  <div class="item"><img src="img/banner2.jpg" alt="Lazy Owl Image"></div>
  <div class="item"><img src="img/banner1.jpg" alt="Lazy Owl Image"></div>
  <div class="item"><img src="img/banner4.jpg" alt="Lazy Owl Image"></div>
  <div class="item"><img src="img/banner3.jpg" alt="Lazy Owl Image"></div>
  <div class="item"><img src="img/banner5.jpg" alt="Lazy Owl Image"></div>
</div>

<!-- ===================
     Contenido Principal
     =================== -->
<div class="container marketing">
  <!-- Inicio del contenido -->
  <hr class="featurette-divider">
        <!-- Intro Servicios -->
        <div class="row featurette">
          <div class="col-sm-12">
            <h2>Servicios</h2>
            <p class="text-justify">OTEC CAPACITACION AGRICOLA en su deseo de dar un servicio de calidad pone a disposición deferentes modalidades de servicios, tales como:</p>
          </div>
        </div>
        <!-- Curso Cerrado -->
        <div class="panel panel-primary">
          <div class="panel-heading">CURSO CERRADO</div>
          <!-- Tabla -->
          <table class="table">
            <tr>
              <td>DESCRICION</td>
              <td>:</td>
              <td>Orientado y diseñado a los requerimientos de la empresa que desea entrenar y especializar a sus trabajadores. Se imparte en las instalaciones del cliente o en salones externos.</td>
            </tr>
            <tr>
              <td>OBJETIVO</td>
              <td>:</td>
              <td>Desarrollar las competencias de los trabajadores de dicha empresa.</td>
            </tr>
            <tr>
              <td>METODOLOGIA</td>
              <td>:</td>
              <td>Teórico- Práctico</td>
            </tr>
          </table>
        </div>
        <!-- Curso Abierto -->
        <div class="panel panel-primary">
          <div class="panel-heading">CURSO ABIERTO</div>
          <!-- Tabla -->
          <table class="table">
            <tr>
              <td>DESCRICION</td>
              <td>:</td>
              <td>Dirigido a trabajadores independientes, dependientes y empresas que disponen de pocos trabajadores y desean capacitarse en forma conjunta.</td>
            </tr>
            <tr>
              <td>OBJETIVO</td>
              <td>:</td>
              <td>Entregar habilidades y capacidades laborales a trabajadores de diversas empresas en forma conjunta.</td>
            </tr>
            <tr>
              <td>METODOLOGIA</td>
              <td>:</td>
              <td>Teórico- Práctico</td>
            </tr>
          </table>
        </div>
  <hr class="featurette-divider">
  <!-- /Fin del contenido -->

<!-- =============
     Pie de pagina
     ============= -->
  <footer>
    <!-- Inicio del banner final -->
    <div class="container">
      <div class="col-sm-4 col-sm-offset-4">
        <img class="banner-footer" src="img/banner_footer.jpg">
      </div>     
    </div>  
    <!-- Fin del banner final -->
            <p>&nbsp;</p>
    <!-- Inicio del pie de pagina -->
    <div class="rowfluid">
      <p class="text-center">info@capacitacionagricola.cl</p>
      <p class="text-center">Freire N°751, Of.3 - Telefono: (034)2382013 - 96829516</p>  
    </div> 
    <div class="rowfluid">
      <p class="pull-left">Capacitación Agrícola Jb eirl 2014.</p>  
      <p class="pull-right">Diseñado por <a href="https://twitter.com/nicolas_ulloa_t">@nicolas_ulloa_t</a></p>
    </div> 
    <!-- Fin del pie de pagina -->  
  </footer>

</div><!-- /.container marketing -->


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
