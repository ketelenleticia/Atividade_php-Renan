<?php
   $vendedor=$_GET["nome"];
   $salariof_fixo=$_GET["salario"] ?: " 0";
   $totas_vendas=$_GET["totalvendas"] ?: " 0";

   $comissão=$totas_vendas * 0.15;
   $salariof_final=$comissão + $salariof_fixo;

   if(isset($_GET["totalvendas"]) && $_GET["totalvendas"] === "" or $_GET["totalvendas"] ==0) {
    echo "<h1>Resultado</h1><br>";
    echo "Vendedor(a): ". $vendedor . "<br>" ;
    echo "Salário fixo: ". "R$".$salariof_fixo. "<br>" ;
    echo "Salario final: " ."R$" . $salariof_final. "<br>";
    echo "Não houve o valor total das vendas ,ou seja nenhuma comissão! <br>";
   

   }else{
    echo "<h1>Resultado</h1><br>";
    echo "Vendedor(a): ". $vendedor . "<br>";
    echo "Salário fixo: "."R$". $salariof_fixo. "<br>";
    echo "Salario final: " ."R$" .  $salariof_final ."<br>";

    }
  


?>