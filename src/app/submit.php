<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Correo al que se enviará el mensaje
    $to = "carlosolivares496@gmail.com";

    // Asunto del correo
    $subject = "Mensaje de contacto de $name";

    // Cuerpo del correo
    $body = "Nombre: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mensaje:\n$message";

    // Encabezados del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "¡Mensaje enviado!";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Acceso denegado.";
}
?>
