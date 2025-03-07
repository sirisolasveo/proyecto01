<?php
    class usuarioController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usuarioModel.php");
            $this->model = new usuarioModel();
        }
        public function guardar($nombre,$dni,$clave){
            $datos = $this->model->insertar($nombre,$dni,$clave);
            file_put_contents('temp_data.json', json_encode($datos));
            // echo json_encode($datos);
            return ($datos != null) ? header("Location:index.php") : header("Location:RegistroUsuario.php");
        }
        public function validar($dni,$clave){
            $datos = $this->model->validar($dni,$clave);
            file_put_contents('temp_data.json', json_encode($datos));
            // echo json_encode($datos);
            return ($this->model->validar($dni,$clave) == true ) ? header("Location:index.php") : header("Location:LoginUsuario.php");
        }
        
    }

?>