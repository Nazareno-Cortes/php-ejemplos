<?php

class Humano {

    public function __construct(public $nombre, public $apellido_materno, public $apellido_paterno, public $dni){

    }

    public function setNombre ($nombre){
        $this ->nombre = $nombre;
        return $this;
    }

    public function setApellidos($apellido_materno, $apellido_paterno){

        $this -> apellido_materno;
        $this -> apellido_paterno;
        return $this;
    }

    public function setDni ($dni){
        $this-> dni = $dni;
        return $this;
    }

    public function imprimirDatos(){
        echo "Nombre:". $this -> nombre, "<br>";
        echo "Apellido materno: " . $this -> apellido_materno, "<br>";
        echo "Apellido paterno: ". $this -> apellido_paterno, "<br>";
        echo "Dni:". $this -> dni, "<br>";
    }

}
$humano = new Humano(nombre:"naza",apellido_paterno:"cortes",apellido_materno:"branciari",dni:"39503133");

$humano ->imprimirDatos();

?>