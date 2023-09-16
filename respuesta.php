<?php
$nombre=$_POST['txtNombre'];
$email=$_POST['txtCorreo'];

$mensaje="Este mensaje fue enviado por ".$nombre."\r\n";
$mensaje.="Su email  es:".$email."\r\n";
$mensaje.="Enviado el".date('d/m/Y',time());

$para='joelmendozataype@gmail.com';

mail($para,utf8_decode($mensaje),$header);
header('Location:gracias.html');
?>