<?php 
   $nome=$_GET["nome"];
   $nota1=$_GET["1nota"] ?: " 0";
   $nota2=$_GET["2nota"] ?: " 0";
   $nota3=$_GET["3nota"] ?: " 0";

   $media=($nota1+$nota2+$nota3) / 3;
   
   echo "<h1>Resultado</h1>";
   if ($media > 5) {
    echo "Aluno: " . $nome."<br>";
    echo "Media: " . $media."<br>";
    echo "APROVADO!";
   }else{
    echo "Aluno: " . $nome."<br>";
    echo "Media: " . $media ."<br>";
    echo "REPROVADO!";
   }
?>