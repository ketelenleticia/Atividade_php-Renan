
<?php
session_start();

if (!isset($_SESSION['totalAte2000'])) {
    $_SESSION['totalAte2000'] = 0;
    $_SESSION['totalGeral'] = 0;
}

$valor = floatval($_GET["valor"]);
$ano = intval($_GET["ano"]);
$continuar = strtoupper($_GET["continuar"]);

if ($ano <= 2000) {
    $desconto = $valor * 0.12;
    $_SESSION['totalAte2000']++;
} else {
    $desconto = $valor * 0.07;
}

$valorFinal = $valor - $desconto;
$_SESSION['totalGeral']++;

echo "<h1>Resultado</h1>";
echo "<h3>Desconto: R$ " . number_format($desconto, 2, ',', '.') . "</h3>";
echo "<h3>Valor a pagar: R$ " . number_format($valorFinal, 2, ',', '.') . "</h3>";

if ($continuar == "N") {

    echo "<h2>Relatório Final</h2>";
    echo "Total de carros até 2000: " . $_SESSION['totalAte2000'] . "<br>";
    echo "Total geral de carros: " . $_SESSION['totalGeral'];

    session_destroy();

} else {

    echo "<br><a href='index.html'>Cadastrar outro veículo</a>";
}

?>
