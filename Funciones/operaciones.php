<?php 
    function multiplicar($n1, $n2) {
        echo $n1 * $n2;
    }

    function esNumero($n1, $n2){
        if(is_numeric($n1) && is_numeric($n2)){
            return true;
        } else{
            return false;
        }
    }
    

    function mostrarMensaje(){
        echo "<span class='error'>Los campos deben llenarse correctamente</span>";
    }

    function validarCampos(){
        if(isset($_POST["numero01"]) && isset($_POST["numero02"])){
            $n1 = $_POST["numero01"];
            $n2 = $_POST["numero02"];

            if(esNumero( $n1, $n2)){
                echo multiplicar($n1, $n2);
            } else{
                mostrarMensaje();
            }
        }
    }

?>