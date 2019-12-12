<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
include("../../db/db_config.php");
class Entrada
{
        //Funcion para mostrar profesores
        public function show() {
                
                $con = new Conexion();
                //como dice el nombre, preparamos la consulta
                $consulta = $con->StartConexion()->prepare("SELECT antCodigo,antTitulo,estNombre,estApellido,proNombre,proApellido
                                                                FROM anteproyecto 
                                                                join  estudiantes on estCedula = antEstudiante
                                                                join profesores on proCedula = antAsesor   
                                                            ");
                $consulta->execute();
                //si hay un resultado en la consulta 
                if ($consulta->rowCount()>= 1) 
                {
                    while($fila = $consulta->fetch())
                    {
                        $entradas[] = $fila;   

                    }
                    return $entradas; 
                }
                else
                {
                       echo "no hay datos en la tabla";
                }                
        }  
}

?>