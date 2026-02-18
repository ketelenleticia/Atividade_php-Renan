<?php 
session_start();
if (!isset($_SESSION["pessoas"])){
    $_SESSION["pessoas"]=[];
}

if(
    isset($_GET["nome"])&&
    isset($_GET["sexo"])
){

   $pessoa=[
    "nome"=> $_GET["nome"],
    "sexo"=>$_GET["sexo"],
   ];
   $_SESSION["pessoas"][]=$pessoa;
}

$totalhomens=0;
$totalmulheres=0;
$pessoa=0;

echo "<h1>Resultado</h1>";
foreach($_SESSION["pessoas"] as $p){
    if($p["sexo"] == "Masculino"){
        echo "<p> {$p["nome"]} é masculino.</p>";
        
        $totalhomens++;
        }else{
            echo "<p> {$p["nome"]} é  feminino.</p>";
            $totalmulheres++;

        }
        $pessoa++;
}
if ($pessoa==56) {
    
  echo "<h2>Total homens:<h2>" . $totalhomens ;
  echo "<h2>Total mulheres:<h2>" .  $totalmulheres;
}
 



?>