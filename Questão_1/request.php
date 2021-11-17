<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $media = ($nota1 + $nota2)/2;

    echo "Nome do usuário: " . $nome;
    echo "<br>Média: $media";
?>