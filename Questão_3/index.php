<!--
Equipe:
    Matheus Fialho Barbosa
    Bianca Schiochet Tiepolo
    Kleber Herivelto de Lima Cavalcanti Filho
    Gabriel Rodrigues Leite S
-->

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
