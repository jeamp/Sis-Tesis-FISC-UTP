<?php

//INCLUYENDO EL ARCHIVO DE LA CLASE validar
require_once("../models/Anteproyecto.php");


//DECLARACIÓN DE VARIABLES

if($_POST){
   
    $titulo = $_POST['titulo'];
    $objetivo = $_POST['objetivo'];
    $prioridad = $_POST['prioridad'];
    $tipoTrabajo = $_POST['tipoTrabajo'];
    $asesor = $_POST['asesor'];
    $archivo = $_POST['archivo'];

    $estudiante=1;

    $Ante = new AnteProyecto(); 
    $Ante->insertProyecto($estudiante,$titulo,$objetivo,$prioridad,$tipoTrabajo,$asesor,$archivo);
}else{
    echo 'Post en blanco';
}


?>