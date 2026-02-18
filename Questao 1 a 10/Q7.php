<?php 
   $temperatura=$_GET["temperatura"] ?: "0";

   $fahrenheit= ($temperatura * 1.8) + 32;

    echo "<h1>Resultado</h1>";
    echo "A temperatura Celsius em Fahrenheit: " . $fahrenheit;

?>