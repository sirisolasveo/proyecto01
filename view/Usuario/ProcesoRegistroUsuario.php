<?php
    require_once("c://xampp/htdocs/proyecto/controller/usuarioController.php");
    $obj = new usuarioController();
    $obj->guardar($_POST['nombre'],$_POST['dni'],$_POST['clave']);
?>