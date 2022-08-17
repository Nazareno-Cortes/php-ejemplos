<?php

class Persona{

    public $nombres;

    public function saludo(){
        echo "hola";
    }

    public function setNombre($nombre){
        $this->nombres = strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this->nombre);
    }
}

trait A {
    public function decirHola(){
        echo "hola";
    }
}

trait B {
    public function decirMundo(){
        echo "mundo";
    }
    abstract public function saludar();
}

trait C{
    use A,B;
    public function saludar(){
        $this->decirHola();
        $this->holaMundo();
    }
}

class Argentino extends Persona{
    use C;
}

$argentino = new Argentino ;

$argentino -> saludar();

?>