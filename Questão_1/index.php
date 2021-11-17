<!--
Faça um documento HTML que permita ao usuário digitar o nome de um aluno e suas duas notas na disciplina de Programação Web;
 •Em seguida faça um script PHP que receba os dados submetidos a partir do documento HTML anterior, calcula a média do aluno e exiba a seguinte mensagem: “O aluno XXXXX ficou com XX,X de média”;
 •Use o método POST no formulário!

Obs.: os códigos devem ser anexado a sua respectiva questão e o código copiado e colado no corpo da resposta abaixo.
!-->

<html>
	<head>	
		<title> MEDIA </title>
	</head>
	<body>
		<form action="request.php" method="POST">
			Nome: <input type="text" name="nome" id="nome"><br>
			Nota 1: <input type="text" name="nota1" id="nota1"><br>
			Nota 2: <input type="text" name="nota2" id="nota2"><br>			
			<input type="submit" value="enviar"/>
		</form>
	</body>
</html>