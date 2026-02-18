<?php
session_start();

if (!isset($_SESSION['totalDesconto'])) {
    $_SESSION['totalDesconto'] = 0;
    $_SESSION['totalPago'] = 0;
}

$valor = floatval($_GET['valor']);

if ($valor == 0) {
    echo "<h2>Encerrado</h2>";
    echo "Total de desconto: R$ " . number_format($_SESSION['totalDesconto'], 2, ',', '.') . "<br>";
    echo "Total pago pelos clientes: R$ " . number_format($_SESSION['totalPago'], 2, ',', '.');
    session_destroy();
    exit();
}

$combustivel = $_GET['combustivel'];

if ($combustivel == "alcool") {
    $percentual = 0.25;
} elseif ($combustivel == "gasolina") {
    $percentual = 0.21;
} else {
    $percentual = 0.14;
}

$desconto = $valor * $percentual;
$valorFinal = $valor - $desconto;

$_SESSION['totalDesconto'] += $desconto;
$_SESSION['totalPago'] += $valorFinal;

echo "Valor do veículo: R$ " . number_format($valor, 2, ',', '.') . "<br>";
echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "Valor a pagar: R$ " . number_format($valorFinal, 2, ',', '.') . "<br><br>";

echo "<a href='index.html'>Cadastrar outro veículo</a>";
?>