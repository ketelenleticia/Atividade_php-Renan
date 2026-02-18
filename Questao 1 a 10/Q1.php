<?php 
    $numero1=$_GET["numero1"] ?: "0";
    $numero2=$_GET["numero2"] ?: "0";

    $valor=$numero1 + $numero2;

   echo "<h1>Resultados</h1><br>";

   echo  " o valor total: " .  $valor;


?>