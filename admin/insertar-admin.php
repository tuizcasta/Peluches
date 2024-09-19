<?php

if (isset($_POST['agregar-admin'])){
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $opciones = array(
        'cost' => 12
    );


    $password_hashed = password_hash($contrasena, PASSWORD_BCRYPT, $opciones);
}
