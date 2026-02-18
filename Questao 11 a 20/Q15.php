<?php 
$valor=$_GET["valor"] ;

echo "<h1>Resultado</h1>";
if (!empty($_GET["valor"]) && !empty($_GET["valor"] != 0)) {
    if ($valor >= 100 &&  $valor <=200) {
        echo "O  valor $valor esta no intervalo entre 100 e 200";
    }else{
        echo "O  valor $valor  não esta no intervalo entre 100 e 200";
    }
    
}else{
    echo "Valor vazio, não a nenhum valor....";
}
?>