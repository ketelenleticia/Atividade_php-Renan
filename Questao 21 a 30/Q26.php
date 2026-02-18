<?php 
// $valor=$_GET["valor"] ;
session_start();
if (!isset($_SESSION["numero"])){
    $_SESSION["numero"]=[];
}

if(
    isset($_GET["valor"])
){

   $numero=[
    "valor"=> $_GET["valor"],
   ];
   $_SESSION["numero"][]=$numero;
}

echo "<h1>Resultado</h1>";
foreach($_SESSION["numero"] as $p){
    if($p["valor"]== 1){
        echo "numero UM <br>";

    }elseif($p["valor"]== 2){
       echo "numero DOIS<br>";
    }elseif($p["valor"]== 3){
        echo "numero TRES<br>";
    }elseif($p["valor"]== 4){
         echo "numero QUATRO";
    }elseif($p["valor"]== 5){  
        echo "numero CINCO<br>";
    }else{
        echo "Valor invalido<br>";
    }    
}
?>