<?php
    //Funciones para Strings
    $mensaje = "Desarrollador Frontend";

    //Longitud
    echo "Longitud string: ".strlen($mensaje). "<br>";

    //Numero de palabras
    echo "Cantidad de palabras: ".str_word_count($mensaje). "<br>";

    //Reversa
    echo  "Al revés: ".strrev($mensaje). "<br>";

    //Encontrar texto
    echo  "El texto buscado aparece en la posición: ".strpos($mensaje, "Frontend"). "<br>";//Parámetros => Lugar donde buscar, palabra a buscar

    //Reemplazar texto
    echo "Texto nuevo: ".str_replace("Frontend", "Backend", $mensaje). "<br>"; //Parámetros => Nuevo texto, texto a reemplazar, cadena de origen

    //Convertir a Minusculas
    echo "Todo minúsculas: ".strtolower($mensaje). "<br>";

    //Convertir a Mayusculas
    echo "Todo mayúsculas: ".strtoupper($mensaje). "<br>";

    //Comparar Cadenas (Solo a nivel de peso)
    echo "Comparación: ".strcmp("Cucamonga", $mensaje). "<br>"; //Parámetros => Cadenas a comparar

    //Substraer cadena
    echo "Lo substraido es: ".substr($mensaje, 13). "<br>";

    //Quitar espacios en blanco
    echo "Sin espacios: ".trim("         Hola    a     todos      "). "<br>";
?>