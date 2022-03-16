<?php
echo"hola";
//Llamando a los campos
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];

//Datos para el correo
$destinatario = "jalvarojs123@gmail.com";
$asunto = "Consulta";

$carta = "De: $nombre $apellido \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

//Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:../?view=contactos');
?>
