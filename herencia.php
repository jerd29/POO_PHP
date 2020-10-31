<?php

    class clasePadre{
        public function metodoPadre(){
            return "hola desde el padre";
        }

        public function metodo1(){
            return "este es metodo padre";
        }
    }

    class claseHijo extends clasePadre{
        public function metodoHijo(){
            // return self::metodo1();
            return parent::metodo1();
        }
        public function metodo1(){
            return "este es metodo hijo";
        }
    }

    // la herencia es obtener todaslas propiedades de 
    //una clase a otra mediante la palabra reservada extends

    // $obj = new claseHijo();
    // echo $obj->metodoPadre();

    // instancia rapida o de doble puntuacion

    echo claseHijo::metodoHijo();

?>