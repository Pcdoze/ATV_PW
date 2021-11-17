<!--
Faça um documento HTML que permita ao usuário digitar a base maior, a base menor e a altura de um trapézio. Em seguida, •Faça um script PHP que receba os dados submetidos pelo documento HTML anterior (use a variável $_REQUEST no script e o método POST no HTML), calcula e exiba sua área;



Obs.: os códigos devem ser anexado a sua respectiva questão e o código copiado e colado no corpo da resposta abaixo.
!-->

<?php
    $basemaior = $_REQUEST['basemaior'];
    $basemenor = $_REQUEST['basemenor'];
    $altura = $_REQUEST['altura'];

    $area = (($basemaior + $basemenor)/2)*$altura;

    echo 'A área é: ' . $area;
?>