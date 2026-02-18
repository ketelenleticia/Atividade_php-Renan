<?php 
  $valor_dolar=$_GET["valor1"] ?:"0";
  $quantidade=$_GET["valor2"] ?: "0";

  $valor_em_reais=$valor_dolar * $quantidade;

  echo "<h1>Resultado</h1>";
  echo "O valor em reais: R$" . $valor_em_reais;

?>