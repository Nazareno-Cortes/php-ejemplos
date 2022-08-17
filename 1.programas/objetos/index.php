<?php
require_once("Persona.php");

$argentino= new Argentino;

$argentino ->setApellidos("Gonsalez","Perez");

echo "<br>";

var_dump($argentino);

?>