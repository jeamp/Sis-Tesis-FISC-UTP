<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
include("../db/db_config.php");
class AnteProyecto
{
        //Funcion para mostrar profesores
        public function insertProyecto($estudiante,$titulo,$objetivo,$prioridad,$tipoTrabajo,$asesor,$archivo) {

                $this->estudiante = $estudiante;
                $this->titulo = $titulo;
                $this->objetivo = $objetivo;
                $this->prioridad = $prioridad;
                $this->tipoTrabajo = $tipoTrabajo;
                $this->asesor = $asesor;
                $this->archivo = $archivo;

                try{
                        $con = new Conexion();
                        //como dice el nombre, preparamos la consulta
                        $insert = $con->StartConexion()->prepare("INSERT INTO anteproyecto (antEstudiante,antTitulo,antObjetivo,antPrioridad,antTitpo,antAsesor,antArchivo)
                                                                        VALUES (?,?,?,?,?,?,?)
                                                                ");
                        
                        $insert->bindParam(1, $estudiante);
                        $insert->bindParam(2, $titulo);
                        $insert->bindParam(3, $objetivo);
                        $insert->bindParam(4, $prioridad);
                        $insert->bindParam(5, $tipoTrabajo);
                        $insert->bindParam(6, $asesor);
                        $insert->bindParam(7, $archivo);
                        $insert->execute();
                        
                        echo "<script>alert('Registrado con Exito');window.location.href='../views/Estudiante/homeEstudiante.php';</script>";

                }catch(PDOException $e){
                        echo  $e->getMessage();
                }
        }  
}

?>