<html>
	<head>	
		<title> MEDIA </title>
	</head>
	<body>
		<form action="request.php" method="POST">
			Nome: <input type="text" name="nome" id="nome"><br>
			Senha: <input type="text" name="senha" id="senha"><br>

			Gênero:<br>
			<input type="radio" id="masc" name="genero" value="Masculino">
  			<label for="masc">Masculino</label><br>
  			<input type="radio" id="femi" name="genero" value="Feminino">
  			<label for="femi">Feminino</label><br>
		
			<input type="submit" value="enviar"/>
		</form>
	</body>
</html>
