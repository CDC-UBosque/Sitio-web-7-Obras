<?php

/*
nom - Nombres
ape - Apellidos
mail - Correo Electronico
com - Comentarios Adicionales
*/

$nom = $_POST['nom'];
$mail = $_POST['mail'];
$com = $_POST['com'];

$to = "gabriel.segura@sugorar.com";
$subject = "Portfolio Contact";
$message .= "\r\n".'Nombres:    '.$nom;
$message .= "\r\n".'Correo Electronico:    '.$mail;
$message .= "\r\n".'Comentarios Adicionales:    '.$com;
$from = "    Portfolio";
$headers = "From: Portfolio" . $from;

if(mail($to,$subject,$message,$headers)){
echo "Mail Sent.";
?>
<script>
  window.location.assign("http://www.sugorar.com/pages/contactsend.php");
</script>
<?php
}


?>