<?php
// Datos del destinatario
$destinatario = "agus4956@gmail.com";

// Datos del remitente
$remitente = "agus@gmail.com";
$nombre_remitente = "Yo desde codigo PHP";

// Asunto del correo
$asunto = "Ejemplo de correo HTML";

// Contenido HTML del correo
$mensaje = "
<html>
<head>
  <title>Correo HTML</title>
</head>
<body>
  <h1>Hola,</h1>
  <p>Este es un ejemplo de correo HTML enviado desde PHP.</p>
</body>
</html>
";

// Cabeceras del correo electrónico
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1\r\n";
$headers .= "From: $nombre_remitente <$remitente>\r\n";

// Envío del correo electrónico
if (mail($destinatario, $asunto, $mensaje, $headers)) {
    echo "El correo se envió correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>
