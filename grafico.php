<?php
    class Modelo_grafico{
        private $conexion;
        function_construct()
        {
            require_once('conexiongr.php');
            $this->conexion = new conexion();
            $this->conexion -> conectar();
        }


        function CargarDatosGraficoBar(){
            $sql = "ESCRIBIR CONSULTA";
            $arreglo = array();
            if ($consulta =  $this->conexion->conexion->query($sql)){

                while ($consulta_VU = mysqli_fetch_array($consulta)){
                    $arreglo[] = $consulta_VU;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }
    }
?>