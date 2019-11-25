<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
include("../db/db_config.php");
session_start();


class validarLogin
{
        //FUNCION PARA HACER LOGIN DE USUARIOS
        public function loginUsuario($email, $password) 
        {
                $this->correo=$email;
                $this->pass=$password;
                
                $con = new Conexion();
                //como dice el nombre, preparamos la consulta
                $consulta = $con->StartConexion()->prepare("SELECT * FROM estudiantes WHERE estCorreo = ? AND password = ?");
                //le decimos a la consulta cuáles son los parámetros que le hemos pasado
                
                $consulta->bindParam(1, $email);
                $consulta->bindParam(2, $password);
                
                //y la ejecutamos
                $consulta->execute();
                
                //si hay un resultado en la consulta creamos las sesiones
                if ($consulta->rowCount() == 1) 
                {
                        while($fila = $consulta->fetch())
                        {
                            //var_dump($fila['nombre']);
                            header("Location: ../views/Estudiante/index.html");

                        }
                }
                else
                {
                       echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTO');window.location.href='../index.php';</script>";
                }                
        }  
}

?>