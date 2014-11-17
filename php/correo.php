<?php 
ob_start();
if (!isset($_GET["txt_email"])) {
	header('Location: ../contacto.php');
}
	echo $nombre = $_GET["txt_nombre"];
	echo $apellido = $_GET["txt_apellido"];
	echo $email = $_GET["txt_email"];
	echo $mensaje = utf8_decode($_GET["textarea_mensaje"]);


	$to      = 'info@capacitacionagricola.cl';
	$subject = 'Mensaje enviado desde www.capacitacionagricola.cl';
	$message = 'Mensaje de: ' . $nombre . ' ' . $apellido . "\n\n" . $mensaje;
	$headers = 'From: '. $email . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	if (mail($to, $subject, $message, $headers)) {
		header('Location: ../contacto_success.php');
	}else{
		header('Location: ../contacto_error.php');
	}



 ?>