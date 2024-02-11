<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $correo = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    echo $nombre;
    echo $correo;
    echo $correo;
    echo $mensaje;

    $destinatario = "correo@gmail.com";
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $cuerpoMensaje = $mensaje;
    $success = mail($destinatario, $asunto, $cuerpoMensaje);
    if(!$success)
    {
        $errorMessage = error_get_last()['message'];
    }else{
        echo 'algo salio bien';
    }
}
?>
