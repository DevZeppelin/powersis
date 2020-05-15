<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['mensaje'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario

$destino="info@powersis.com.ar";

$asunto="Consulta enviada desde www.powersis.com.ar";


//el punto concatena. r y n hace el salto de linea
$mensaje="Tu Nombre es: ".$nombre_usuario."\r\n";
$mensaje.="Tu Email es: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$remitente="From: info@powersis.com.ar";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:mensaje-enviado.html");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>