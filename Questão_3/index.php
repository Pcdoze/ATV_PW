<!--
Faça um documento HTML que permita ao usuário digitar a base maior, a base menor e a altura de um trapézio. Em seguida, •Faça um script PHP que receba os dados submetidos pelo documento HTML anterior (use a variável $_REQUEST no script e o método POST no HTML), calcula e exiba sua área;

Obs.: os códigos devem ser anexado a sua respectiva questão e o código copiado e colado no corpo da resposta abaixo.
!-->
<!--
Faça um documento HTML que permita ao usuário digitar a base maior, a base menor e a altura de um trapézio. Em seguida, •Faça um script PHP que receba os dados submetidos pelo documento HTML anterior (use a variável $_REQUEST no script e o método POST no HTML), calcula e exiba sua área;



Obs.: os  action="request.php"códigos devem ser anexado a sua respectiva questão e o código copiado e colado no corpo da resposta abaixo.
!-->

<html>
	<head>	
		<title> MEDIA </title>
	</head>
	<body>
    <form action="request.php" method="POST">
			Base maior: <input type="text" name="basemaior" id="basemaior"/><br>
			Base menor: <input type="text" name="basemenor" id="basemenor"/><br>
			Altura: <input type="text" name="altura" id="altura"/><br>
			<input type="submit" value="Enviar"/>
		</form>  
        <?php
            $basemaior = $_POST['basemaior'];
            $basemenor = $_POST['basemenor'];
            $altura = $_POST['altura'];
        ?>
    </body>
</html>