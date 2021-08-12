<link rel="stylesheet" href="style.css">

<?php

if(isset($_POST["origem"]) && isset($_POST["destino"]) 
    && isset($_POST["distancia"]) && isset($_POST["pedagios"])) {

$origem = $_POST["origem"];
$destino = $_POST["destino"];
$distancia = $_POST["distancia"];
$pedagios = $_POST["pedagios"];
$precoPedagio = 9.40;
$precoKm = 6;

$frete = ($distancia * $precoKm) + ($pedagios * $precoPedagio);

echo "<div class='estilo'>A viagem de $origem à $destino custará, no total,  <em>R$ $frete.</em></div>";

} else{
    echo "<h1>Você não enviou os dados.</h1>";
}

