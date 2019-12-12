<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
include("../db/db_config.php");
session_start();


class validarEmail
{
        //FUNCION PARA HACER LOGIN DE USUARIOS
        public function EmailUsuario($email) 
        {
                $this->email=$email;

                $con = new Conexion();
                //como dice el nombre, preparamos la consulta
                $consulta = $con->StartConexion()->prepare("SELECT email FROM usuarios WHERE email = ? ");
                //le decimos a la consulta cuáles son los parámetros que le hemos pasado
                
                $consulta->bindParam(1, $email);
                
                //y la ejecutamos
                $consulta->execute();
                
                //si hay un resultado en la consulta creamos las sesiones
                if ($consulta->rowCount() == 1) 
                {
                        while($fila = $consulta->fetch())
                        {
                            //var_dump($fila['nombre']);
                            echo "<script>alert('la Contraseña fue enviada a su correo');window.location.href='../index.php';</script>";
                            
                            return $estCodigo=$fila[0];  

                        }
                }
                else
                {
                       echo "<script>alert('El correo no existe');window.location.href='../index.php';</script>";
                }                
        }  
}


?>