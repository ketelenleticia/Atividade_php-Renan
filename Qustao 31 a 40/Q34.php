<?php 
$nivel=$_GET["nivel"];
$hora=$_GET["quantidade"];

echo "<h1>Resultado</h1>";
if ($nivel == 1) {
    $salario= $hora *12;
    echo "o valor do salario desse professor de nivel $nivel é de: $salario";
}elseif ($nivel == 2) {
    $salario= $hora * 17;
    echo "o valor do salario desse professor de nivel $nivel é de: $salario";
}else {
    $salario= $hora *25;
    echo "o valor do salario desse professor de nivel $nivel é de: $salario";
}


?>