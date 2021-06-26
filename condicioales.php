<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Condicionales</title>
    <style>
        body {
            font-family: "Montserrat";
            background-color: #bde85f;
        }

        div {
            background-color: aliceblue;
            padding: 20px;
            margin: 0 auto;
            width: 300px;
        }

        h1{
            font-size: 36px;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $hora = 1;
        if ($hora > 5 && $hora < 12) {
            echo "<h1>Hola! Buenos días</h1>";
        } else if($hora >= 12 && $hora <= 19){
            echo "<h1>Hola! Buenas tardes</h1>";
        }else if ($hora >= 20 && $hora <= 24){
            echo  "<h1>Hola! Buenas noches</h1>";
        } else{
            echo "<h1>Ese horario no existe o es madrugada D:</h1>";
        }
        ?>
    </div>
</body>

</html>