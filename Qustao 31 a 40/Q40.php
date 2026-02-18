<?php 
$nome=$_GET["nome"];
$idade=$_GET["idade"];
$grupo=$_GET["grupo"];

if ($idade>= 17 && $idade <= 70) {
    if ($idade>= 17 && $idade <= 20) {
        if ($grupo=="baixo") {
             $categoria=1;
        }elseif ($grupo=="medio") {
             $categoria=2;
        }elseif ($grupo == "alto") {
             $categoria=3;
        }
    }elseif ($idade>= 21 && $idade <= 24) {
        if ($grupo=="baixo") {
             $categoria=2;
        }elseif ($grupo=="medio") {
             $categoria=3;
        }elseif ($grupo == "alto") {
             $categoria=4;
        }
    }elseif ($idade>= 25 && $idade <= 34) {
        if ($grupo=="baixo") {
             $categoria=3;
        }elseif ($grupo=="medio") {
             $categoria=4;
        }elseif ($grupo == "alto") {
             $categoria=5;
        }
    }elseif ($idade>= 35 && $idade <= 64) {
        if ($grupo=="baixo") {
             $categoria=4;
        }elseif ($grupo=="medio") {
             $categoria=5;
        }elseif ($grupo == "alto") {
             $categoria=6;
        }
    }elseif ($idade>= 65 && $idade <= 70) {
        if ($grupo=="baixo") {
             $categoria=7;
        }elseif ($grupo=="medio") {
             $categoria=8;
        }elseif ($grupo == "alto") {
             $categoria=9;
        }
    }

    echo "<h1>Resultado</h1>"; 
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Categorias do seguro: $categoria";
    
}else{
    echo "Não estar inserido a sua faixa etaria";
}


?>