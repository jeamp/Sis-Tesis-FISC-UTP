<?php

//INCLUYENDO EL ARCHIVO DE LA CLASE validar
require_once("../models/Login.php");

//DECLARACIÓN DE VARIABLES

if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //var_dump($email.' - '.$password);
    //DECLARACIÓN Y CREACIÓN DEL OBJETO DE LA CLASE validar
    $validar = new validarLogin(); 
    $usuario=$validar->loginUsuario($email,$password);
    echo $usuario;
}else{
    echo 'Post en blanco';
}

?>