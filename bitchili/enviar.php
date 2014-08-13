<?php
$mensaje = $_POST['correo'];

mail("abdielcr@bitchili.com", "Aboutme", $mensaje, "Ninguno");
?>