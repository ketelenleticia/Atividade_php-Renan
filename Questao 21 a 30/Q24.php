<?php
session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

$numero = floatval($_GET["numero"]);
$continuar = strtoupper($_GET["continuar"]);

$_SESSION['contador']++;

echo "<h3>Número " . $_SESSION['contador'] . "</h3>";

if ($numero > 0) {
    echo "O número $numero é POSITIVO.<br>";
} elseif ($numero < 0) {
    echo "O número $numero é NEGATIVO.<br>";
} else {
    echo "O número é ZERO.<br>";
}

echo "<br>";

if ($continuar == "N") {

    echo "<h2>Encerrado</h2>";
    echo "Total de números digitados: " . $_SESSION['contador'];

    session_destroy();

} else {

    echo "<a href='index.html'>Digitar outro número</a>";
}
?>