<?php
    $fixo = $_POST['fixo'];
    $vendas = $_POST['vendas'];

    $total = vendas*fixo*0.04;

    echo "Salário Fixo: " . $fixo;
    echo "<br>Salário + Vendas: $total";
?>
