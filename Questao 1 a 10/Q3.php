<?php 
   $distancia=$_GET["numero1"] ?:  "0";
   $combustivel=$_GET["numero2"] ?: "0";

   echo "<h1>Resultado</h1>";
   if (isset($_GET['numero1'])) {
    if ($distancia!= 0) {
        $valor=$distancia/$combustivel;
        echo "o valor  medio do automovel é:  " . $valor;
    }else{
         echo "Não a como calcular o valor medio,se não tiver o valor da distancia percorida!";

    }

    }else{
        echo "numero não indentificado";
    }


?>