<?php 
$numero=$_GET["numero"];

echo "<h1>Resultado</h1>";
if (isset($_GET["numero"])&& $_GET["numero"] != 0) {
    if ($numero > 10) {
        echo "Parabens o $numero é maior que 10!!!!!!!!!!!!!";
    }else{
        echo "Que pena!!!! O $numero é menor que 10.....";
    }
    
}else{
    echo "Valor vazio, não a nenhum valor....";
}

?>