<?php 
$valor=$_GET["valor"] ?: 0;
$prestaçao=$valor/5;

echo "<h1>Resultado</h1>";
echo "O valor da prestação: " ."R$ " .$prestaçao;

?>