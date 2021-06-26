<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario</title>
	<style>
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="formulario.php" method="POST">
		<?php
        //Issets para validar
        if(isset($_POST["nombre"])){
            $nombre = $_POST["nombre"];
            $password = $_POST["password"];
            $email = $_POST["email"] ;

            $campos = array();
            
            if($nombre == ""){
                array_push($campos, "El campo Nombre no puede estar vacio");
            }

            if($password == "" || strlen($password)<7 ){
                array_push($campos, "El campo Password no puede estar vacio ni tener menos de 8 caracteres");
            }

            if($email == "" || strpos($email, "@") === false) {
                array_push($campos, "El campo email debe tener un formato válido");
            }

            if(count($campos) > 0){
                echo "<div class='error'>";
                for($i = 0; $i < count($campos); $i++){
                    echo "<li>".$campos[$i]. "</li>";
                }
            } else {
                echo "<div class='correcto'>
                        Datos correctos";

            }
            echo "</div>";
        }
        ?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email">
		</p>

		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>