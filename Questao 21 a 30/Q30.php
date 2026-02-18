<?php 
$nome=$_GET["nome"]?: "desconhecido";
$idade=$_GET["idade"]?: "0";
$salario_fixo=$_GET["salario"] ?: "0";
$sexo=$_GET["sexo"];

echo "<h1>Resultado</h1>";
echo "Trabalhador: $nome <br>";
echo "Idade: $idade <br>";
echo "Gênero: $sexo <br>";
echo "Salario fixo: $salario_fixo <br>";

if(!empty($_GET["nome"]) != ""){
    if ($_GET["sexo"] == "Masculino") {
        if ($_GET["idade"] >= 30) {
            $salario_final=$salario_fixo + 100;
        }else {
            $salario_final=$salario_fixo + 50;
         
        }
        echo "Salario final: $salario_final <br>";
    }elseif($_GET["sexo"] == "Feminino "){
        if ($_GET["idade"] >= 30) {
            $salario_final=$salario_fixo + 200;
        }else {
            $salario_final=$salario_fixo + 80;
         
        }
        echo "Salario final: $salario_final <br>";
    }else{
        echo "Genero não indentificado";
    }
}else {
    echo "<h2>Pessoa não indentificavel</h2>";
}


?>