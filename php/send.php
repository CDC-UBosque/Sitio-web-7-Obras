<?php

/*
nom - Nombres
ape - Apellidos
mail - Correo Electronico
com - Comentarios Adicionales
*/

$nombre1 = $_POST['nombre1'];
$correo1 = $_POST['correo1'];
$tel1 = $_POST['tel1'];
$comentario1 = $_POST['comentario1'];

$to = "seguragabriel@unbosque.edu.co";
$subject = "Formulario Página Web 7 Obras";
$message .= "\r\n".'Nombres:    '.$nombre1;
$message .= "\r\n".'Correo Electrónico:    '.$correo1;
$message .= "\r\n".'Teléfono:    '.$tel1;
$message .= "\r\n".'Comentarios Adicionales:    '.$tel1;
$from = "    7 Obras";
$headers = "From: Formulario Página Web 7 Obras" . $from;

if(mail($to,$subject,$message,$headers)){
echo "Mail Sent.";
?>
<script>
  window.location.assign("../hablemos-gracias.html");
</script>
<?php
}


?>