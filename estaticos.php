<?php

    // a los metodos estaticos no llegan los atributos 
    // como ejemplo    public $mensaje =1;

    class miClase{

        public $mensaje =1;

        public function hola(){
            return "hola";
        }

        public static function metodo(){
            // return $this->$mensaje;
            return self::hola();
        }
    }

    echo miClase::metodo();

?>