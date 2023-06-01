<?php
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $option = $_POST["operacion"];
    switch ($option) {
        case 'suma':
            $res = $num1 + $num2;
            break;
        case 'resta':
            $res = $num1 - $num2;
            break;
        case 'multiplicacion':
            $res = $num1 * $num2;
            break;
        case 'division':
            if ($num2 == 0) {
                $res = "ERROR, no se puede dividir en 0";
            }else{
                $res= ($num1 / $num2);
            }
            break;
    }    
    echo "el resultado de la ".$option." es ".$res;
?>