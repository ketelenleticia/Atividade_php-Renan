<?php
session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

$nome = $_GET["nome"];
$matricula = $_GET["matricula"];
$nota1 = floatval($_GET["nota1"]);
$nota2 = floatval($_GET["nota2"]);
$nota3 = floatval($_GET["nota3"]);
$continuar = strtoupper($_GET["continuar"]);

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 8) {
    $classificacao = "A";
} elseif ($media >= 7) {
    $classificacao = "B";
} elseif ($media >= 6) {
    $classificacao = "C";
} elseif ($media >= 5) {
    $classificacao = "D";
} else {
    $classificacao = "R";
}

$_SESSION['contador']++;

echo "<h3>Estudante " . $_SESSION['contador'] . "</h3>";
echo "Nome: $nome <br>";
echo "Matrícula: $matricula <br>";
echo "Nota Final: " . number_format($media, 2, ',', '.') . "<br>";
echo "Classificação: $classificacao <br><br>";

if ($continuar == "N") {

    echo "<h2>Encerrado</h2>";
    echo "Total de estudantes cadastrados: " . $_SESSION['contador'];

    session_destroy();

} else {

    echo "<a href='index.html'>Cadastrar outro estudante</a>";
}
?>