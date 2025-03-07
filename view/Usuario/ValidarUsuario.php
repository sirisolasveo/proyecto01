<?php
    require_once("c://xampp/htdocs/proyecto/controller/usuarioController.php");
    $obj = new usuarioController();
    $obj->validar($_POST['dni'],$_POST['clave']);
?>