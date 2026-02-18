<?php 
$valor1=$_GET["valor1"] ;
$valor2=$_GET["valor2"] ;

echo "<h1>Resultado</h1>";
if ($valor1 !=$valor2) {
    if ($valor1 >$valor2) {
        echo "O $valor1 é maior que $valor2"."<br>";
        echo "Os valores são diferentes";
    }else{
        echo "O $valor2 é maior que $valor1"."<br>";
        echo "Os valores são diferentes" ;
    }
    
}else{
    echo "Os valores são iguais!";
}

?>