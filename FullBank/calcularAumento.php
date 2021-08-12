<?php

if (isset($_POST["nome"]) && isset($_POST["salarioAtual"]) && isset($_POST["feminino"]) 
    && isset($_POST["masculino"]) && isset($_POST["outro"]) && isset($_POST["cargo"])) {

        $nome = $_POST["nome"];
        $salarioAtual = $_POST["salarioAtual"];
        $feminino = $_POST["feminino"];
        $masculino = $_POST["masculino"];
        $outro = $_POST["outro"];
        $cargo = $_POST["select"];

    } else {
        echo "<h1>Você não enviou as informações corretamente.</h1>";
    }

    $salarioAtual = 0;
    $salarioFinal = 0;

    if ($salarioAtual > 5000) {
        $salarioFinal = $salarioAtual * (10/100);
        echo "$nome passará a receber $salarioFinal, no cargo de $cargo."
    } else {
        $salarioFinal = $salarioAtual * (20/100);
        echo "$nome passará a receber $salarioFinal, no cargo de $cargo."
    }

