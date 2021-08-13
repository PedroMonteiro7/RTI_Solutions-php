<?php

if (isset($_POST["nome"]) && isset($_POST["salarioAtual"]) && isset($_POST["genero"]) 
     && isset($_POST["cargo"])) {
           
    $nome = $_POST["nome"];
    $salarioAtual = $_POST["salarioAtual"];
    $genero = $_POST["genero"];
    $cargo = $_POST["cargo"];

    // if ($salarioAtual > 5000) {
    //     $salarioFinal = $salarioAtual + ($salarioAtual * (10/100));
    //     echo ("$nome passará a receber $salarioFinal, no cargo de $cargo.");
    // } else {
    //     $salarioFinal = $salarioAtual + ($salarioAtual * (20/100));
    //     echo ("$nome passará a receber $salarioFinal, no cargo de $cargo.");
    // }

    $salarioFinal = $salarioAtual > 5000 ? $salarioAtual * 1.1 : $salarioAtual * 1.2;

} else {
    echo "<h1>Você não enviou os dados.</h1>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcular acréscimo de salário</title>
</head>
<body>
    <main>
        <p> <?= $genero === "m" ? "O" : ($genero === "f" ? "A" : "") ?>
            <?= $nome ?> passará a receber R$ 
        <?= number_format($salarioFinal, 2, ",", ".")?>, no cargo de <?=$cargo?>.</p>
    </main>
</body>
</html>


    


    

