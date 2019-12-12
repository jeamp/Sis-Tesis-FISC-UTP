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
                $estCodigo;
                $this->email=$email;
                $this->password=$password;
                
                $con = new Conexion();
                //como dice el nombre, preparamos la consulta
                $consulta = $con->StartConexion()->prepare("SELECT idUsuarios,email,password,roles
                                                                FROM usuarios 
                                                                WHERE email = ? AND password = ?      
                                                                ");
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
                             if($fila['roles']==1){
                                header("Location: ../views/Estudiante/homeEstudiante.php");
                                return $_SESSION['id'] =$fila['idUsuarios'];
                             }
                             else if($fila['roles']==2){
                                echo 'funciono';
                                return $_SESSION['id'] =$fila['idUsuarios'];
                             }
                             else if($fila['roles']==3){
                                header("Location: ../views/Admin/index.html");
                                return $fila['idUsuarios'];
                             }else{
                                     echo 'error';
                             }     
                             
                        }
                }
                else
                {
                       echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTO');window.location.href='../index.php';</script>";
                }                
        }  
}


?>