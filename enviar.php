<?php
$destino= "asesorfis1995@yahoo.com";
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];
$subject = $_POST['asunto'];

$contenido= "Nombre: ".$name."\n Correo: ".$email." \n Asunto: ".$subject." \nMensaje:".$message;
mail($destino, "Contacto", $contenido);
echo '<script>alert("El mensaje ha sido enviado correctamente, en breve obtendra una respuesta");window.location.href="index.html";</script>'
?>