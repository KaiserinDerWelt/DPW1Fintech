<?php $nombreF = $_POST['nombreF'];
$rfcF = $_POST['rfcF'];
$direccionF = $_POST['direccionF'];
$telefonoF = $_POST['telefonoF'];
$correoF = $_POST['correoF'];
$recipient = "dejmariana@gmail.com";
$subject = "Mi tarea";
$mailheader = "De: $email \r\n";
mail($recipient, $subject, $nombreF,$rfcF,$telefonoF,$correoF $mailheader) or die("Error!");
echo "Gracias profe, me gusto esta tarea";
?>