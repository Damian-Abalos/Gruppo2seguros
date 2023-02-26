<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['tel'];
$consulta = $_POST['consulta'];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $email . ",\r\n";
$mensaje .= "Su telefono es: " . $telefono . ",\r\n";
$mensaje .= "Mensaje: ". $_POST['consulta'] . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "grupo2seguros@gmail.com";
$asunto = "este mail fue enviado desde www.gruppo2seguros.com";

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');


?>