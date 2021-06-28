<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Datos</title>
</head>
<body>
    <form action="insertarDatos.php" method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Añadir Pendiente">
    </form>

    <div id="todoList">
        <?php
            $servidor = "localhost";
            $nombreUsuario = "root";
            $contraseña = "toronja23";
            $database = "todolistdb";

            $conexion = new mysqli($servidor, $nombreUsuario, $contraseña, $database);
            if( $conexion -> connect_error){
                die("Conexion Fallida: ".$conexion -> connect_error);
            }

            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                $sql = "INSERT INTO todotable(texto, completado) VALUES ('$texto', false)";

                if($conexion -> query($sql) === true){
                    echo '<div><form action=""><input type="checkbox">'.$texto.'</input></form></div>';
                }else{
                    die("Error al insertar dato: ".$conexion -> error);
                }
            }
        ?>
    </div>
</body>
</html>