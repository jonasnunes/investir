<?php

    $valor = $_POST['valor'] ?? 0;
    $tempo = $_POST['tempo'] ?? 0;
    $meses = $tempo * 12;
    $total = $valor;

    for($i = 1; $i <= $meses; $i++){
        $juros = $total * 0.01;
        $total += $juros;
    }

    $resultado = "<p style='color: #26782D;'>Em $meses meses, você irá poupar R$ ".number_format($total, 3) . "</p>";