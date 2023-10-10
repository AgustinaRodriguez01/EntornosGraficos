<!DOCTYPE html>
<html>
<head>
    <title>Recomendar este sitio a un amigo</title>
</head>
<body>
    <h1>Recomendar este sitio a un amigo</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tu_nombre = $_POST["tu_nombre"];
        $tu_email = $_POST["tu_email"];
        $nombre_amigo = $_POST["nombre_amigo"];
        $email_amigo = $_POST["email_amigo"];
        $mensaje = $_POST["mensaje"];

        // Validación básica (puedes añadir más validaciones según tus necesidades)
        if (empty($tu_nombre) || empty($tu_email) || empty($nombre_amigo) || empty($email_amigo) || empty($mensaje)) {
            echo "Todos los campos son obligatorios.";
        } else {
            // Correo electrónico de destino
            $destinatario = $email_amigo;
            $asunto = "Recomendación de sitio web";
            $mensaje_email = "Hola $nombre_amigo,

Te recomiendo visitar este sitio web: https://frro.cvg.utn.edu.ar/
$message

Atentamente,
$tu_nombre";

            $cabeceras = "MIME-Version: 1.0\r\n";
            $cabeceras .= "Content-type:text/html;charset=iso-8859-1\r\n";
            $cabeceras .= "From: $tu_nombre <$tu_email>" . "\r\n";

            // Enviar el correo electrónico
            if (mail($destinatario, $asunto, $mensaje_email, $cabeceras)) {
                echo "Correo enviado con éxito a $email_amigo.";
            } else {
                echo "Error al enviar el correo.";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Tu nombre:</label>
        <input type="text" name="tu_nombre"><br>

        <label>Tu email:</label>
        <input type="email" name="tu_email"><br>

        <label>Nombre de tu amigo:</label>
        <input type="text" name="nombre_amigo"><br>

        <label>Email de tu amigo:</label>
        <input type="email" name="email_amigo"><br>

        <label>Mensaje:</label>
        <textarea name="mensaje" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Enviar Recomendación">
    </form>
</body>
</html>
