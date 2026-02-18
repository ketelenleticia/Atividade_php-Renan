<?php 
$a=floatval($_GET["a"]);
$b=floatval($_GET["b"]);
$c=$_GET["c"];

echo "<h1>Resultado</h1>";
if ($c == "+") {
    echo "Resultado: " . ($a+$b);

}elseif ($c == "-") {
    echo "Resultado: " . ($a-$b);
}elseif ($c == "*") {
    echo "Resultado: " . ($a*$b);
}elseif ($c=="/"){
    if ($b==0) {
        echo "Erro de diviçao por 0";
    }else{
        echo "Resultado: " . ($a/$b);
    }

}else{
    echo "Operador não definido!";
}

?>