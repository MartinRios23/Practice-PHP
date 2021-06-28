<?php

    $servidor = "localhost";
    $nombreUsuario = "root";
    $contraseña = "toronja23";
    $database = "todolistdb";

    $conexion = new mysqli($servidor, $nombreUsuario, $contraseña, $database);

    if( $conexion -> connect_error){
        die("Conexion Fallida: ".$conexion -> connect_error);
    }

    /*
    $sql = "CREATE DATABASE ToDoListDB";
    if($conexion -> query($sql) === true){
        echo "Base de datos creada";
    }else{
        die("Error al crear base de datos". $conexion -> error);
    }*/

    $sql = "CREATE TABLE todoTable(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR(100) NOT NULL,
        completado BOOLEAN NOT NULL,
        fecha_creacion TIMESTAMP 
    )";

    if($conexion -> query($sql) === true){
        echo "Tabla creada exitosamente";
    }else{
        die("Error al crear tabla". $conexion -> error);
    }
?>