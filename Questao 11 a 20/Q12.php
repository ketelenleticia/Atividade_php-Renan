<?php 
$custo_fabrica=$_GET["custo"] ?: "0";

$valor_imposto=$custo_fabrica + ($custo_fabrica* 45/100);
$custo_final=$valor_imposto + ($valor_imposto* 28/100);

echo "<h1>Resultado</h1>";
echo "O custo ao consumidor: " ."R$". $custo_final;

?>