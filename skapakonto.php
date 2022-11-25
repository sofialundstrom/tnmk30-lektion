<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Skapa konto</title>
</head>
<body>
	<form action="skapakontophp.php" method="post">
		<fieldset>
			<legend>Skapa konto</legend>
				<ol>
					<li>
						<label for="förnamn">Förnamn</label>
						<input type="text" name="förnamn" id="förnamn" required>
					</li>
					<li>
						<label for="efternamn">Efternamn</label>
						<input type="text" name="efternamn" id="efternamn" required>
					</li>
					<li>
						<label for="användarnamn">Användarnamn</label>
						<input type="text" name="användarnamn" id="användarnamn" required>
					</li>
					<li>
						<label for="lösenord">Lösenord</label>
						<input type="password" name="lösenord" id="lösenord" required>
					</li>	
					<input type="submit" value="Skapa konto"/>
				</ol>
				<p>Har du redan ett konto? <a href="inloggning.php">Logga in här</a></p>
		</fieldset>
	</form>
</body>
</html>