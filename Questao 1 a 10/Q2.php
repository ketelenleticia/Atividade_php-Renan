<?php 
    $numero1=$_GET["numero1"] ?: "0";
    $numero2=$_GET["numero2"] ?: "0";

    $valorsoma=$numero1 + $numero2;
    $valorsub=$numero1 - $numero2;
    $valormul=$numero1 * $numero2;
    $valordiv=$numero1 / $numero2;

    echo "<h1>Resultados</h1><br>";
    
    echo  "o valor total da soma: " .  $valorsoma . "<br>";
    echo  "o valor total da subtração: " .  $valorsub ."<br>";
    echo  "o valor total  da multiplicação: " .  $valormul ."<br>";
    echo  "o valor total da divisão: " .  $valordiv ."<br>";



?>