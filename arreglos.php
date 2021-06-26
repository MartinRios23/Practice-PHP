<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arreglos</title>
    <style>
        body {
            font-family: "Montserrat";
            background-color: #b5cde6;
            font-size: 4em;
            padding: 50px;
        }
    </style>
</head>

<body>
    <?php
        $frutas = array("Banana", "Manzana", "Uvas", "Peras");
        print_r($frutas). "<br>";

        echo $frutas[3]."<br>";

        //Elementos array
        echo count($frutas). " elementos"."<br>";

        for($i = 0; $i < count($frutas); $i++){
            echo $frutas[$i]."<br>";
        }


        $edades = array("Marcos" => 25, "Martin" => 24, "Hernesto" => 35);

        print_r($edades)."<br>";

        echo "<br>";

        foreach($edades as $key => $value){
            echo $key. " tiene el valor de: ". $value."<br>";
        }
    ?>
</body>

</html>
