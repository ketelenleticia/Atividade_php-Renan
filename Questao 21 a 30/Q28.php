 <?php

session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
    $_SESSION['totalAntes'] = 0;
    $_SESSION['totalDepois'] = 0;
}

$nome = $_GET["nome"];
$salario = floatval($_GET["salario"]);
$minimo = floatval($_GET["minimo"]);

$salariosMinimos = $salario / $minimo;

if ($salariosMinimos < 3) {
    $percentual = 0.50;
} elseif ($salariosMinimos <= 10) {
    $percentual = 0.20;
} elseif ($salariosMinimos <= 20) {
    $percentual = 0.15;
} else {
    $percentual = 0.10;
}

$reajuste = $salario * $percentual;
$novoSalario = $salario + $reajuste;

$_SESSION['contador']++;
$_SESSION['totalAntes'] += $salario;
$_SESSION['totalDepois'] += $novoSalario;

echo "<h3>Funcionário " . $_SESSION['contador'] . "</h3>";
echo "Nome: $nome <br>";
echo "Salário atual: R$ " . number_format($salario, 2, ',', '.') . "<br>";
echo "Reajuste: R$ " . number_format($reajuste, 2, ',', '.') . "<br>";
echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . "<br><br>";

if ($_SESSION['contador'] == 2) {

    $aumentoTotal = $_SESSION['totalDepois'] - $_SESSION['totalAntes'];

    echo "<h2>Resumo Final</h2>";
    echo "Total da folha antes: R$ " . number_format($_SESSION['totalAntes'], 2, ',', '.') . "<br>";
    echo "Total da folha depois: R$ " . number_format($_SESSION['totalDepois'], 2, ',', '.') . "<br>";
    echo "Aumento total da empresa: R$ " . number_format($aumentoTotal, 2, ',', '.') . "<br>";

    session_destroy();

} else {

    echo "<a href='index.html'>Cadastrar próximo funcionário</a>";
}
?>