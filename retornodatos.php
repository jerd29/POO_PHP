<?php

    class retornoDatos{
        //tipo string
        //tipo entero
        //tipo arreglo
        //tipo json

        public function retornaString($edad){
            if($edad > 18){
                return "Es mayor de edad";
            }else{
                return "No es mayor de edad";
            }

        }

        public function rerotnaEntero($valor){
            if($valor > 0){
                return 1;
            }else{
                return 0;
            }
        }
    }

    $cadena = new retornoDatos();
    var_dump($cadena->retornaString(20));
    echo "<br>"
    var_dump($cadena->retornaEntero(1));

?>