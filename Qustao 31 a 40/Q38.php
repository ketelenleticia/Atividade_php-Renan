<?php 


$lab=(float) $_GET["lab"];
$avaliacao=(float)$_GET["avaliacao"];
$exame=(float) $_GET["exame"];

$media=(($lab * 2) + ($avaliacao * 3) + ($exame *5)) /10 ;

    
echo "<h1>Resultado</h1>";
echo "Nota final: " . number_format($media,2);

?>