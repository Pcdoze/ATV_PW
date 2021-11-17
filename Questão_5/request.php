<?php
    $nasc = $_POST['nasc'];
    $atual = 2021;

    $idade = $atual - $nasc;
    $idade2022 = $idade + 1;
    $dias = $idade * 365;


    echo "<br>Idade atual: $idade";
    echo "<br>Idade em 2022: $idade2022";
    echo "<br>Esta pessoa viveu $dias dias";
?>