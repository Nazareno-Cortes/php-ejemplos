<?php
class Persona{
    public $nombre,$edad;
    public $apellido1,$apellido2;

    public function setNombre($nombre){
        $this->nombre = strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this->nombre);
    }
    public function setApellidos($apellido1,$apellido2){
        $this->apellido1 = strtolower($apellido1);
        $this->apellido2 = strtolower($apellido2);
    }
    public function getApellidos(){
        return $this->apellido1 . "" . $this->apellido2;
    }
};
    class Argentino extends Persona{
        public $departamento,$ciudad;
        
        public function setApellidos($apellido1,$apellido2){
             parent::setApellidos($apellido1,$apellido2);

             echo "Los apellidos se asignaron con exito";
        }
    }

    class Uruguayo extends Persona{
        public $departamento,$ciudad;

        public function setApellidos($apellido1,$apellido2){
            $this->apellido1 = $apellido2;
            $this->apellido2 = $apellido1;
        }
    }




?>