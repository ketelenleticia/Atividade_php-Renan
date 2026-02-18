<?php 
$valor1=$_GET["valor1"] ;
$valor2=$_GET["valor2"] ;

echo "<h1>Resultado</h1>";
if (!empty($_GET["valor1"]) && !empty($_GET["valor2"] != 0)) {
    if ($valor1 > $valor2) {
        echo "O $valor1 é maior que $valor2"."<br>";
        echo "O $valor2 é menor que $valor1";
    }elseif($valor1 < $valor2){
        echo "O $valor2 é maior que $valor1"."<br>";
        echo "O $valor1 é menor que $valor2";
    }else{
        echo "O valor $valor1 é igual ao valor $valor2";
    }
    
}else{
    echo "Valor vazio, não a nenhum valor....";
}

?>