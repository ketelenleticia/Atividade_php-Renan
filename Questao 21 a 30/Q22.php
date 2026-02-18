<?php
session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
    $_SESSION['totalCusto'] = 0;
    $_SESSION['totalVenda'] = 0;
}

$custo = floatval($_GET["custo"]);
$venda = floatval($_GET["venda"]);

$_SESSION['contador']++;
$_SESSION['totalCusto'] += $custo;
$_SESSION['totalVenda'] += $venda;

echo "<h3>Produto " . $_SESSION['contador'] . "</h3>";

if ($venda > $custo) {
    echo "Resultado: LUCRO<br>";
} elseif ($venda < $custo) {
    echo "Resultado: PREJUÍZO<br>";
} else {
    echo "Resultado: EMPATE<br>";
}

echo "Preço de Custo: R$ " . number_format($custo, 2, ',', '.') . "<br>";
echo "Preço de Venda: R$ " . number_format($venda, 2, ',', '.') . "<br><br>";

if ($_SESSION['contador'] == 40) {

    $mediaCusto = $_SESSION['totalCusto'] / 40;
    $mediaVenda = $_SESSION['totalVenda'] / 40;

    echo "<h2>Resumo Final</h2>";
    echo "Média do Preço de Custo: R$ " . number_format($mediaCusto, 2, ',', '.') . "<br>";
    echo "Média do Preço de Venda: R$ " . number_format($mediaVenda, 2, ',', '.') . "<br>";

    session_destroy();

} else {

    echo "<a href='index.html'>Cadastrar próximo produto</a>";
}
?>