<?php 
$lado1 =$_GET["lado1"];
$lado2 =$_GET["lado2"];
$lado3 =$_GET["lado3"];

echo "<h1>Resultado</h1>";
if (
    $lado1 < $lado2 + $lado3 &&
    $lado2 < $lado1 + $lado3 &&
    $lado3 < $lado1 + $lado2

){
    echo "Forma um triângulo:<br>";

    if ($lado1==$lado2 && $lado2==$lado3) {
        echo "Triângulo Equilátero";
    }elseif ($lado1 == $lado2 or $lado1== $lado3 or $lado2== $lado3 ) {
        echo "Triângulo Isosceles";
    }else {
         echo "Triângulo Escaleno";
    }
}else {
    echo "Não forma um triângulo<br>";
}

?>