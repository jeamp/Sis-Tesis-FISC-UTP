<?php

//INCLUYENDO EL ARCHIVO DE LA CLASE validar
require_once("../models/LoginAdmin.php");


//DECLARACIÓN DE VARIABLES

if($_POST){
    $email = $_POST['correo'];
    $password = $_POST['contrasena'];
    
    //var_dump($email.' - '.$password);
    //DECLARACIÓN Y CREACIÓN DEL OBJETO DE LA CLASE validar
    $validar = new validarLogin(); 
    $estudiante=$validar->loginUsuario($email,$password);
}else{
    echo 'Post en blanco';
}


?>