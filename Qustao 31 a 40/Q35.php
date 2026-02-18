<?php 
$idade=$_GET["idade"];

echo "<h1>Resultado</h1>";
if ($idade>=5  && $idade<= 7) {
    echo "Categoria: infantil A ";
}elseif ($idade>= 8 &&  $idade<=10) {
    echo "Categoria: infantil B ";
}elseif ($idade>=11  &&  $idade<=13) {
     echo "Categoria: Juvenil A ";
}elseif ($idade>=14  && $idade<=17 ) {
     echo "Categoria: Juvenil B ";
}elseif ($idade>=18  &&  $idade<=25) {
      echo "Categoria: Senior";
}else {
   echo "Categoria: idade fora da faixa etaria";
}


?>