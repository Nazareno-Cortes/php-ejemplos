<?php

class Hogar{
    public $color, $seguridad;
    final public function saludar(){
        echo "hogar";
    }
}

class Departamento extends Hogar {
    public function saludar (){
        echo "departamento";
    }
}

$departamento = new Departamento ;
$departamento-> saludar();

?>