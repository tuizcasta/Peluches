<?php

if (isset($_POST['agregar-admin'])){


    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $opciones = array(
        'cost' => 12
    );


    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

    try{
        include_once 'funciones/funciones.php';
        $stmt = $conn->prepare("INSERT INTO admins (nombre, usuario, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $usuario, $password_hashed);
        $stmt->execute();

        $id_registro = $stmt->insert_id;
        
        if($id_registro > 0){
            $respuesta = array(
                'respuesta' =>'exito',
                'id_admin' => $id_registro
            );
        }else{
            $respuesta = array(
                'respuesta' =>'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        $respuesta = array(
            'respuesta' => 'error',
            'mensaje' => $e->getMessage()
        );
    }

    die(json_encode($respuesta));
}


if (isset($_POST['login-admin'])){
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    try{
        include_once 'funciones/funciones.php';
        $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?;");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($id, $nombre_admin, $usuario_admin, $password_admin);

        if($stmt->affected_rows){
            $existe = $stmt->fetch();
            if($existe){
                if(password_verify($password, $password_admin)){
                    
                    session_start();
                    $_SESSION['nombre'] = $nombre_admin;
                    $_SESSION['usuario'] = $usuario_admin;

                    $respuesta = array(
                        'respuesta'=> 'exito',
                        'usuario'=> $nombre_admin
                    );
                } else{
                    $respuesta = array(
                        'respuesta'=> 'no exito'
                    );
                }

            } else{
                $respuesta = array(
                    'respuesta'=> 'error'
                );
            }
        }
        $stmt->close();
        $conn->close();

    }catch(Exception $e){
        echo "Error: " . $e->getMessage(); 
    }

    die(json_encode($respuesta));
}