<?php  
$tituloPagina = "Nosotros - Jb eirl Capacitación Agrícola";
$pagina = "nosotros"; 
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
      <!-- Quienes Somos -->
      <div class="row featurette">
        <div class="col-sm-12">
          <h2>Quienes Somos</h2>
          <p class="text-justify">El Otec CAPACITACION AGRICOLA JB E.I.R.L., nace por una necesidad de constituir una Otec orientada a otorgar servicios de capacitación, con una fuerte orientación al fortalecimiento de habilidades y capacidades en los trabajadores del ámbito agrícola y agroindustrial, preferentemente, en una zona donde la segunda actividad económica de importancia económica es la agricultura con una orientación al mercado de exportación, y que por más de 10 años en la relatoría de cursos en dicha área por parte del Gerente de ésta Otec y por más de 20 años ejerciendo servicios de desarrollo productivo a la agricultura familiar campesina de la zona, es que se ha concluido en satisfacer los requerimientos con una propuesta de alta calidad y profesionalismo en el servicio de capacitación, con el firme propósito de brindar apoyo a las organizaciones en el ámbito del potenciamiento de capacidades, asistiéndolas en la puesta en práctica de las estrategias de formación y desarrollo.</p>
          <p class="text-justify">De esta forma es que en el año 2012 se constituye la empresa individual de responsabilidad limitada.</p>
        </div>
      </div>

      <hr class="featurette-divider">
      <!-- Politicas de calidad -->
      <div class="row featurette">
        <div class="col-sm-12">
          <h2>Política de Calidad</h2>
          <p class="text-justify">Capacitación Agrícola JB E.I.R.L., expresa su compromiso de asegurar la calidad de las acciones de capacitación que ejecute, buscando la satisfacción de los clientes, considerándola parte integral de los negocios que emprenda y por ello asegura su difusión, comprensión y cumplimiento en todos los niveles de la organización.</p>
          <p class="text-justify">Esta se fundamenta en el cumplimiento de los requisitos acordados con los clientes, con el SENCE y con la legislación vigente. Asegurar la mejora continua de los procesos y actividades que desarrollamos. Asegurar que todos los empleados sean competentes para cumplir con sus obligaciones y responsabilidades y reciban la capacitación adecuada.</p>
        </div>
      </div>

      <hr class="featurette-divider">
      <!-- Mision -->
      <div class="row featurette">
        <div class="col-sm-6">
          <h2>Misión</h2>
          <p class="text-justify">Contribuir al desarrollo técnico, productivo, económico del recurso humano de las empresas a través de un servicio de excelencia y calidad, centrado en las necesidades de nuestro cliente, proporcionando conocimientos, habilidades y aptitudes, colaborando con el mejoramiento en la calidad de vida y desarrollo socio-económico de la región.</p>
        </div>
      <!-- Vision -->
        <div class="col-sm-6">
          <h2>Visión</h2>
          <p class="text-justify">Constituirse en una empresa líder en el servicio de la capacitación por su profesionalismo y calidad de servicio otorgado. Sus programas de formación y de desarrollo de capacidades laborales estarán orientados a fortalecer las capacidades humanas y apoyar a las organizaciones para enfrentar los mercados cada vez más exigentes y competitivos.</p>
        </div>
      </div>

  <hr class="featurette-divider">
  <!-- /Fin del contenido -->
            <h3>OTEC CAPACITACION AGRICOLA JB Eirl, es un Otec autorizada y certificada bajo norma de calidad ISO 9001:2008 y Nch 2728:2003.</h3>
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
