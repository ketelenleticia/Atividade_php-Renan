<?php 
$mes=$_GET["mes"];

echo "<h1>Resultado</h1>";
switch ($mes) {
    case 1:
        echo "$mes Janeiro";
        break;
    case 2:
        echo "$mes Fevereiro";
        break;  
    case 3:
        echo "$mes Março";
        break;
    case 4:
        echo "$mes Abril";
        break; 
    case 5:
        echo "$mes Maio";
        break;
    case 6:
        echo "$mes Junho";
        break;
    case 7:
        echo "$mes Julho";
        break;  
    case 8:
        echo "$mes Agosto";
        break;
    case 9:
        echo "$mes Setembro";
        break; 
    case 10:
        echo "$mes Outubro";
        break;
     case 11:
        echo "$mes Novembro";
        break; 
    case 12:
        echo "$mes Dezembro";
        break;                 
    default:
        echo"Mês invalido";
        break;
}
?>