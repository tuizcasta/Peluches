<?php
    $conn = new mysqli('localhost', 'root', '', 'peluches');
    
    if($conn->connect_error){

        echo $error -> $conn->connect_error;

    }
?>