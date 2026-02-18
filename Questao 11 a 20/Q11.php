<?php 
$custo=$_GET["custo"] ?: "0";
$percentual=$_GET["percentual"] ?: "0";

$aumento=$custo * $percentual/100;
$valor=$custo + $aumento;

echo "<h1>Resultado</h1>";
echo "O aumento percentual é de: " ."R$". $aumento . "<br>";
echo "O preço da venda: " . "R$".$valor;

?>