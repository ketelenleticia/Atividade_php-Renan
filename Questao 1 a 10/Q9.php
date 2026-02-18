<?php 
$deposito=$_GET["valor1"] ?: "0";

$rendimento=$deposito * 0.007;
$valor_final= $deposito + $rendimento;

echo "<h1>Resultado</h1>";
echo "O rendimento foi: "."R$ ".$rendimento."<br>";
echo "Valor final: " ."R$ ". $valor_final."<br>";
?>