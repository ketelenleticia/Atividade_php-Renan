<?php 
$valor=$_GET["valor"] ;

echo "<h1>Resultado</h1>";
if (!empty($_GET["valor"]) && !empty($_GET["valor"] != 0)) {
    if ($valor > 80 ) {
        echo "O $valor1 é maior que 80"."<br>";
        
    }elseif($valor < 25){
        echo "O $valor é menor que 25";
    }elseif($valor==40){
        echo "O valor $valor é igual ao valor 40";
    }
    
}else{
    echo "Valor vazio, não a nenhum valor....";
}

?>