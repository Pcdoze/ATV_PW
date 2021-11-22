<!--
Equipe:
-->

<?php
if($_POST) {

    $salario = $_POST['salario'];
    $vendas = $_POST['vendas'];
    $pctm = 0.04;
    $resultado = $salario + ($vendas * $pctm);
    echo "Seu salario devido a comissão é de: "; 
    echo $resultado;
    echo "<br>Sua comissão foi de:";
    echo ($vendas * $pctm);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
</html>
    <head>
        <title> Salario </title>
    </head>
    <body>
    <form action="" method="POST">
          <p>Informe seu salario fixo: <input type="text" name="salario" id="salario"/> </p>
          <p>Informe o valor apurado em vendas: <input type="text" name="vendas" id="vendas"/> </p>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
