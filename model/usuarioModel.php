<?php
    class usuarioModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$dni,$clave){
            $stament = $this->PDO->prepare("INSERT INTO usuario VALUES(null,:nombre,:dni,:clave)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":dni",$dni);
            $stament->bindParam(":clave",$clave);
            $datosDB = [
                'nombre' => $nombre,
                'dni' => $dni,
                'clave' => $clave
            ];
            return ($stament->execute()) ?  $datosDB : false ;
        }
        public function validar($dni,$clave){
            $stament = $this->PDO->prepare("SELECT * FROM usuario WHERE dni = :dni AND clave = :clave");
            $stament->bindParam(":dni",$dni);
            $stament->bindParam(":clave",$clave);
            return ($stament->execute()) ? $stament->fetch() : false;
        }

    }

?>