<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/logga.css">
	<title>Inloggningssida</title>
</head>
<body>
	<h1>Logga in</h1>
	<form action="inloggningphp.php" method="post">
					<input type="text" name="användarnamn" id="användarnamn" placeholder="Användarnamn" required>
					<input type="password" name="lösenord" id="lösenord" placeholder="Lösenord" required>
				<input id="logga" type="submit" value="Logga in"/>
	</form>
		<div class="konto">
			<p>Har du inget konto? <a href="skapakonto.php">Skapa konto här</a></p>
		</div>
</body>
</html>