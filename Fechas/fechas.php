<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
    <style>
        body{
            background-color: #5276af;
            height: 100%;
        }
        #container{
            background-color: white;
            margin: 100px auto;
            padding: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
    <?php 
        /**
         * d- dia del mes (1-31)
         * m- mes del año (1-12)
         * Y- año (4 digitos)
         * l- dia de la semana
         * 
         * h- hora en formato 1-12
         * i- minutos 0-59
         * s- segundos 0-59
         * a- am-pm
         */

        $mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

         echo "Fecha: ".date("l"). " ".date("d"). " de ". $mes[date("m")-1]. " de ".date("Y"). "<br>";
         echo "Son las: ". date("h: ia")
    ?>
    </div>
    
</body>
</html>