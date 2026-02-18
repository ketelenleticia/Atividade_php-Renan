<?php 
$valorA=$_GET["valor1"] ?: 0;
$valorB=$_GET["valor2"] ?: 0;

list($valorA,$valorB) = array($valorB,$valorA);

echo "<h1>Resultado</h1>";
echo "a: " . $valorA."<br>";
echo "b: " . $valorB."<br>";
?>