<?php 
$Nombre = 'Juan';

//--
//if else

$a=5;
$b=3;

if ($a >$b) {
    echo "a es mayor que b";
}elseif($a <$b){
    echo "a es menor que b";
}else{
    echo "a es igual a b";
}

//------
// while 

$base = 2;
$exp = 5 ;

$resultado = 1;

$i =1;

while($i <= $exp) {
    $resultado = $resultado * $base;
    $i++;
} 

echo "<div> </div> El valor de $base elevado a la $exp es: $resultado";

//-----
// foreach()

// $alumnos= array("Victor", "Iris", "Rosa", "Hector");

$alumnos = ["Victor", "Iris", "Rosa", "Hector"];

foreach ($alumnos as $indice => $alumnos) {
  echo $alumnos."se encontro $indice <br>";
}

//--
//function

function factorial($n) {
    $res =1;
    for ($i = 1; $i < $n; $i++) {
        $res = $res * $i; 
    }

    return $res;
}
$res = factorial(6);

echo "el factorial de 6 es: $res";

//--
// array 

$datos = [ 
    "nombre" => "nazareno",
    "email" => "naza@gmail.com",
    "celular" => "0303456"
];
 echo $datos ["email"];

//--

?>
