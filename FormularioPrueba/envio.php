<?php

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    /*------------*/
    mail('mix19942321@gmail.com', $nombre, $email, $telefono, $asunto, $mensaje);

?>