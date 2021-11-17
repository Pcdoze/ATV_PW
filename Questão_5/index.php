<!--
Faça um script PHP que receba de um formulário escrito em HTML uma variável com o ano de nascimento de uma pessoa, crie uma constante com o ano atual, calcule e mostre: a idade dessa pessoa em anos; quantos dias esta pessoa já viveu; quantos anos essa pessoa terá em 2022.

Os códigos devem conter um comentário com seu nome, da equipe, turma (P1 ou P2), data e hora da criação do código e número da questão.



Obs.: os códigos devem ser anexado a sua respectiva questão e o código copiado e colado no corpo da resposta abaixo.

!-->

<html>
	<head>	
		<title> MEDIA </title>
	</head>
	<body>
		<form action="request.php" method="POST">
			Ano de nascimento: <input type="text" name="nasc" id="nasc"><br>
			<input type="submit" value="enviar"/>
		</form>
	</body>
</html>