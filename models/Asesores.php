<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
include("../../db/db_config.php");
class GetAsesores
{
        //Funcion para mostrar profesores
        public function show() {
                
                $con = new Conexion();
                //como dice el nombre, preparamos la consulta
                $consulta = $con->StartConexion()->prepare("SELECT proNombre,proApellido,depNombre,proFoto 
                                                                FROM profesores 
                                                                join  departamentos on idDepartamentos = proDepartamento");
                $consulta->execute();

                //si hay un resultado en la consulta 
                if ($consulta->rowCount()>= 1) 
                {
                        while($fila = $consulta->fetch())
                        {
                         $asesores[] = $fila;   

                        }
                        return $asesores; 
                }
                else
                {
                       echo "no hay datos en la tabla";
                }                
        }  
}

?>