<?php

    class metodos{
        public function mostrarDatos($sql){
            $c = new conectar();
            $conexion =$c->conexion();

            $result=mysqli_query($conexion,$sql);

            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }



?>