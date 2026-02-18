<?php 
$tipo=(int)$_GET["tipo"];
$consumo=(float)$_GET["conta"];

if ($tipo==1) {
    $valor_kml=0.60;
}elseif ($tipo==2) {
    $valor_kml=0.48;
}elseif($tipo==3){
   $valor_kml=1.29;
}else {
    echo "Tipo de cliente invalido!";
    exit;
}

$total= $consumo * $valor_kml;

echo "<h1>Resultado</h1>";
echo "consumo: $consumo KWh<br>";
echo "Valor por kwh: R$ ".number_format($valor_kml,2, ",",".") . "<br>";
echo "<br>Total a pagar: R$ ".number_format($total,2, ",",".") . "<br>";

?>