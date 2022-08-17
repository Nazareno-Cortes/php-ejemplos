<?php
// form

  $nombre = $_REQUEST['nombre'];
  $edad = $_REQUEST['edad'];
  $sexo = $_REQUEST['sexo'];
  $roles = $_REQUEST['roles'];
 
  echo "<p> usuario = $nombre </p>";
  echo "<p> edad= $edad </p>";
  echo "<p> sexo = $sexo </p>";
  echo "<p>roles </p>";

  echo "<ul>";
    foreach($roles as $rol){
      echo "<li>$rol</li>";
    }
    echo "</ul>";

?>
/--