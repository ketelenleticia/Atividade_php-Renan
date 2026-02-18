<?php 
$numero=[$_GET["a"], $_GET["b"], $_GET["c"]];
sort($numero);

echo "<h1>Resultado</h1>";
echo "Ordem crescente<br>";
foreach($numero as $n){
    echo $n . "<br>";
}

?>