<?php

class MyClass{
    public $public ="Public";
    protected $protected = "Protected";
    private $private = "Private";

    function printHello() {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }
}

class MyClass2 extends MyClass{

    public $public ="Public 2";
    protected $protected = "Protected 2";


    function printHello(){
    echo $this->public . "<br>";
    echo $this->protected . "<br>";
    }
}

$obj2 = new MyClass2;
$obj2->printHello();

?>