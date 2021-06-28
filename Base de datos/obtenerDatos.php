<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lala.css">
    <title>Insertar Datos</title>
</head>
<body>
    <form action="obtenerDatos.php" method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Añadir Pendiente">
    </form>

    <div id="todoList">
        <?php

            //Conexión Base de datos
            $servidor = "localhost";
            $nombreUsuario = "root";
            $contraseña = "toronja23";
            $database = "todolistdb";

            $conexion = new mysqli($servidor, $nombreUsuario, $contraseña, $database);
            if( $conexion -> connect_error){
                die("Conexion Fallida: ".$conexion -> connect_error);
            }

            //Insertar registros
            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                $sql = "INSERT INTO todotable(texto, completado) VALUES ('$texto', false)";

                //Validar registros
                if($conexion -> query($sql) === true){
                    //echo '<div><form action=""><input type="checkbox">'.$texto.'</input></form></div>';
                }else{
                    die("Error al insertar dato: ".$conexion -> error);
                }
            }


            //Devuelve lo que haya en la tabla. No hace falta validar
            $sql = "SELECT * FROM todotable";
            $resultado = $conexion -> query($sql);

            //Con fetch_assoc saco todos los elementos que haya en la consulta
            if($resultado -> num_rows > 0){
                while($row = $resultado -> fetch_assoc()){
                    echo '<div><form action=""><input type="checkbox">'.$row['texto'].'</input></form></div>';
                }
            }
            
            $conexion -> close();
        ?>
    </div>
</body>
</html>