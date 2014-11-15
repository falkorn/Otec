<?php  
$tituloPagina = "Cursos - Jb eirl Capacitación Agrícola";
$pagina = "cursos"; 
include('php/header.php');
?>

<!-- =========
     Jumbotron
     ========= -->
<div class="jumbotron">
  <!-- Imagen de fondo -->
  <img class="fondo" src="img/slider1.jpg">
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
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <h3>Nuestros Cursos.</h3>
      <div class="row featurette">
        <div class="col-sm-8">
          <h2 class="featurette-heading"><a href="curso_uso_y_manejo_de_plaguicidas.php">Uso y Manejo de Plaguicidas.</a></h2>
          <p class="lead text-justify">Orientado a trabajadores que están relacionados o potenciales a ejecutar labores con plaguicidas en sus actividades. Curso que dura 30 horas y permite acceder credencial SAG, certificado y franquicia Sence.</p>
        </div>
        <div class="col-sm-4">
          <img class="featurette-image img-responsive" src="img/curso1.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-sm-4">
          <img class="featurette-image img-responsive" src="img/curso2.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-sm-8">
          <h2 class="featurette-heading"><a href="curso_mejoramiento_en_el_uso_de_agua_riego_disponible.php">Mejoramiento en el uso de agua riego disponible.</a></h2>
          <p class="lead text-justify">Orientado a agricultores, profesionales y estudiantes relacionados con actividades agrícola demandante de agua riego y que están enfrentados a situación de restricción hídrica en sus cultivos. Duración 24 horas y permiten acceder a diploma de participación.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-sm-8">
          <h2 class="featurette-heading"><a href="curso_prevencion_de_riesgos_para_trabajadores_agricolas.php">Prevencion de riesgos para trabajadores agricolas.</a></h2>
          <p class="lead text-justify">Orientado a trabajadores agricolas y jefaturas, relacionadas con labores y actividades en predios y packing, que demanden tecnicas y conocimientos en la prevencion de riesgos, asociados al trabajo.</p>
        </div>
        <div class="col-sm-4">
          <img class="featurette-image img-responsive" src="img/curso3.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-sm-4">
          <img class="featurette-image img-responsive" src="img/muypronto.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-sm-8">
          <h2 class="featurette-heading"><a href="contacto.php">Mas Cursos disponibles.</a></h2>
          <p class="lead text-justify">Invitamos a nuestros clientes a exponer sus necesidades de capacitación para su personal, en prevdios agricolas y packings.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

<!-- =============
     Pie de pagina
     ============= -->
<h3>OTEC CAPACITACION AGRICOLA JB Eirl, es un Otec autorizada y certificada bajo norma de calidad ISO 9001:2008 y Nch 2728:2003.</h3>
<!-- FOOTER -->
<?php  include('php/footer.php'); ?>