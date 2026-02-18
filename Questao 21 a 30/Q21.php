<?php 
session_start();
if (!isset($_SESSION["pessoas"])){
    $_SESSION["pessoas"]=[];
}

if(
    isset($_GET["nome"])&&
    isset($_GET["sexo"])&&
    isset($_GET["idade"])&&
    isset($_GET["saude"])
){

   $pessoa=[
    "nome"=> $_GET["nome"],
    "sexo"=>$_GET["sexo"],
    "idade"=>$_GET["idade"],
    "saude"=>$_GET["saude"]
   ];
   $_SESSION["pessoas"][]=$pessoa;
}

$totalapto=0;
$totalnaoapto=0;

echo "<h1>Resultado</h1>";
foreach($_SESSION["pessoas"] as $p){
    if($p["sexo"] == "M" && $p["idade"] >= 18 && $p["saude"] == "boa"){
        echo "<p> {$p["nome"]} esta apto.</p>";

        $totalapto++;
        }else{
            echo "<p> {$p["nome"]}  não esta apto.</p>";
            $totalnaoapto++;

        }
}
echo "Total Aptos: $totalapto ";
echo "Total não aptos:  $totalnaoapto"
?>