<?php

    class Conexion{
            
        public static function StartConexion(){
            global $conexion;
            $user_db = 'root';
            $pass_db = 'db.tesis_2019';
            $dbname = 'anteproyecto1';
            $pass_db ='';
            
            try 
            {
                $dsn = "mysql:host=localhost;dbname=$dbname";
                $options = array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION);
                $conexion = new PDO($dsn, $user_db, $pass_db);
                $conexion ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
                //echo "CONEXION EXITOSA";
                return $conexion;
            }
    
            catch (PDOException $e)
            {
                echo $e -> getMessage();
            } 

        }
      
    }
       


?>