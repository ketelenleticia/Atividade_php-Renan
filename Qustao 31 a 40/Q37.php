<?php 
$nome=$_GET["nome"];
$idade=$_GET["idade"];
$sexo=$_GET["sexo"];
$altura=floatval($_GET["altura"]);



if (!empty($_GET["nome"])!= "") {
    
    if ($sexo == "Masculino") {
        if ($altura > 1.70) {
            if ($idade <=20) {
                $peso=(72.7 * $altura) - 58;
            }elseif ($idade >=21 && $idade <=39) {
                $peso=(72.7 * $altura) - 53;
            }elseif ($idade >=40) {
                $peso=(72.7 * $altura) - 45;
            }
            
        }elseif ($altura <= 1.70) {
             if ($idade <= 40) {
                $peso=(72.7 * $altura) - 50;
            }elseif ($idade > 40) {
                $peso=(72.7 * $altura) - 58;
            }
        }
        
    }elseif ($sexo == "Feminino") {
        if ($altura > 1.50) {
             if ($idade >35) {
                $peso=(62.1 * $altura) - 44.7;
            }
            
        }elseif ($altura <= 1.50) {
             if ($idade <= 35) {
                $peso=(62.1 * $altura) - 45;
            }elseif ($idade < 35) {
                $peso=(62.1 * $altura) - 49;
            }
        }
    }
   echo "<h1>Resultado</h1>";
   echo "Nome: $nome <br>";
   echo "Idade: $idade <br>";
   echo "Sexo: $sexo <br>";
   echo "Peso ideal: " . number_format($peso, 2) . " kg";
    

}else {
    echo "valor invalido";
}





?>