<?php
    require_once("../../models/Estudiantes.php");
    
    $usuario=1;
    $id=$usuario;
    $get = new GetEstudiantes(); 
    $get->showE($id);
?>
