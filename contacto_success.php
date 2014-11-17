<?php  
$tituloPagina = "Contacto - Jb eirl Capacitación Agrícola";
$pagina = "contacto"; 
$enviado = "clear";
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

<div class="row">

<div class="alert alert-success alert-dismissible fade in" role="alert">
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
<p class="text-center"><strong>¡Mensaje enviado con Exito!</strong></p></div>
<h1>Contáctanos</h1>
<hr class="featurette-divider">
  <div class="col-sm-10 col-md-9 col-lg-9 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">

    <ul id="contact">
      <li>

        <form class="form-horizontal" role="form" method="get" action="php/correo.php">

          <div class="form-group">
            <label for="txt_nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
            </div>
          </div>

          <div class="form-group">
            <label for="txt apellido" class="col-sm-2 control-label">Apellido</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txt apellido" name="txt apellido" placeholder="Apellido">
            </div>
          </div>

          <div class="form-group">
            <label for="txt_email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <label for="textarea_mensaje" class="col-sm-2 control-label">Mensaje</label>
            <div class="col-sm-10">
              <textarea type="password" class="form-control" id="textarea_mensaje" rows="5" name="textarea_mensaje" placeholder="Escriba su mensaje"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
             	<button type="submit" class="btn btn-primary pull-right" name="btn_enviar_correo">Enviar</button>
            </div> 
          </div>

        </form>

      </li>
    </ul>
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
