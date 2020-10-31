<?php
    // un metodo privado solo puede ser accedido en la misma
    // clase donde fue creado, al mismo tiempo no puede
    // mostrarse fuera o en instancia debe manejarse dentro
    // de un metodo de la misma clase


    class clase1{
        private function saludar(){
            return "saludando";
        }

        public function mandarSaludo(){
            return self::saludar();
        }

    }

        echo clase1::mandarSaludo();

?>