<?php
    class Calculadora{
        public $num1;
        public $num2;
        public $option;
        
        public function __construct(){
            $this->num1 = $_POST["num1"];
            $this->num2 = $_POST["num2"];
            $this->option = $_POST["option"];
        }

        public function validacion(){
            if (is_numeric($this->num1) && is_numeric($this->num2)) {
                $this->operacion();
            } else {
                echo "Debe ingresar valores numéricos";
            }
        }

        public function operacion(){
            switch ($this->option) {
                case 'suma':
                    $res = $this->num1 + $this->num2;
                    break;
                
                case 'resta':
                    $res = $this->num1 - $this->num2;
                    break;

                case 'multiplicacion':
                    $res = $this->num1 * $this->num2;
                    break;

                case 'division':
                    if ($this->num2 == 0) {
                        $res = "ERROR, no se puede dividir en 0";
                    }else{
                        $res = ($this->num1 / $this->num2);
                    }
                    break;

                default:
                    $res = "Seleccione una opción válida";
                    break;
            }
            $this->respuesta($res);
        }

        public function respuesta($mensaje){
            echo $mensaje;
        }
    }

    $obj = new Calculadora();
    $obj->validacion();

/*     $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $option = $_POST["option"]; */
    
    
    /* switch ($option) {
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
    echo "el resultado de la ".$option." es ".$res; */
?>