<?php 
session_start();
if (!isset($_SESSION["pessoas"])){
    $_SESSION["pessoas"]=[];
}

if(
    isset($_GET["idade"])
){

   $pessoa=[
    "idade"=> $_GET["idade"],
   ];
   $_SESSION["pessoas"][]=$pessoa;
}

$total_maior_idade=0;
$total_menor_idade=0;
$pessoa=1;

echo "<h1>Resultado</h1>";
echo "Lista:";
foreach($_SESSION["pessoas"] as $p){
    if($p["idade"] >=18){
        echo "<p>Pessoa $pessoa tem {$p["idade"]} anos; é maior de idade.</p>";
        
        $total_maior_idade++;
        }else{
            echo "<p>Pessoa $pessoa  tem {$p["idade"]} anos, é  menor de idade.</p>";
            $total_menor_idade++;

        }
        $pessoa++;
}
if ($pessoa==76) {

  echo "<hr>";
  echo "<h2>Total de pessoas de maior idade:<h2>" . $total_maior_idade ;
  echo "<h2>Total de pessoas de menor idade:<h2>" .  $total_menor_idade;

  
}

?>