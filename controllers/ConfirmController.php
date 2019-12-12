<?php

//INCLUYENDO EL ARCHIVO DE LA CLASE validar
require_once("../models/Confirm.php");


//DECLARACIÓN DE VARIABLES

if($_POST){

    $email = $_POST['email'];
    
    $validar = new validarEmail(); 
    $validar->EmailUsuario($email);
}else{
    echo 'Post en blanco';
}

?>