<?php 
session_start();
if (!isset($_SESSION["numeros"])){
    $_SESSION["numeros"]=[];
}

if(
    isset($_GET["numero"])
){

   $numero=[
    "numero"=> $_GET["numero"]
   ];
   $_SESSION["numeros"][]=$numero;
}

$total_do_intervalo=0;
$numero=1;


echo "<h1>Resultado</h1>";
foreach($_SESSION["numeros"] as $p){
    if($p["numero"] >=10 && $p["numero"]<=150 ){
        echo "<p> {$p["numero"]} esta  no intervalo.</p>";

        $total_do_intervalo++;
        }else{
            echo "<p> {$p["numero"]}  não esta no intervalo.</p>";

        }
    $numero++;
}
if ($numero == 81) {
echo "<hr>" ;
echo "<h2>Total:</h2>";  
echo "Total de numeros que estao no intervalo: $total_do_intervalo ";

}


?>