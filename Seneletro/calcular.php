<link rel="stylesheet" href="style.css">

<?php

if(isset($_POST["nome"]) && isset($_POST["rua"]) 
    && isset($_POST["numero"]) && isset($_POST["consumo"])) {

$nome = $_POST["nome"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$consumo = $_POST["consumo"];

} else {
    echo "<h1>Você não enviou as informações corretamente.</h1>";
}

$gastao = 0.42;
$economico = 0.32;

if ($consumo > 120) {
    $total = $consumo * $gastao;
    echo "<div class='formatar'><br></br>";
        echo "<div class='aumentarFonte'>Conta de luz de $nome</div><br></br>";
        echo "Rua $rua, nº $numero<br></br>";
        echo "<div class='gastao'>Consumo: $consumo kWh</div><br>";
        echo "Valor a pagar: R$ $total";
    echo "</div>";
} else {
    $total = $consumo * $economico;
    echo "<div class='formatar'><br></br>";
        echo "<div class='aumentarFonte'>Conta de luz de $nome</div><br></br>";
        echo "Rua $rua, nº $numero<br></br>";
        echo "<div class='economico'>Consumo: $consumo kWh</div><br>";
        echo "Obrigado por economizar!<br></br>";
        echo "Valor a pagar: R$ $total";
    echo "</div>";
    }