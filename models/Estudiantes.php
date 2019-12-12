<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
include("../../db/db_config.php");
class GetEstudiantes
{
        //FUNCION PARA HACER LOGIN DE USUARIOS
        public function showE($id) 
        {
                $usuario=$id;
                
                $con = new Conexion();
                //como dice el nombre, preparamos la consulta
                $consulta = $con->StartConexion()->prepare("SELECT idUsuarios,estNombre,estApellido,estCedula
                                                                FROM usuarios 
                                                                JOIN estudiantes on estUsuario = idUsuarios
                                                                WHERE idUsuarios=?      
                                                                ");
                //le decimos a la consulta cuáles son los parámetros que le hemos pasado
                
                $consulta->bindParam(1, $usuario);
                
                //y la ejecutamos
                $consulta->execute();
                
                //si hay un resultado en la consulta creamos las sesiones
                if ($consulta->rowCount() == 1) 
                {
                        while($fila = $consulta->fetch())
                        {
                            
                            $estudiantes[]=$fila;
                            
                        }
                    return $estudiantes;
                }
                else
                {
                       echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTO');window.location.href='../index.php';</script>";
                }                
        }  
}


?>