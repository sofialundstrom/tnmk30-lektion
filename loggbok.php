<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="loggbok.css">
	<title>Loggbok</title>
</head>
<?php include('../php/header.php'); ?>
<body>
	<form action="start.php" method="POST">
        <fieldset>
            <legend>Loggbok</legend>
            <ol>
                <li>
                    <label for="fråga1">Hur jobbigt var passet?</label>
                    <input type="text" name="fråga1" id="fråga1" list="betyg">
                    <datalist id="betyg">
                    	<option>A</option>
                    	<option>B</option>
                    	<option>C</option>
                    	<option>D</option>
                    	<option>E</option>
                    	<option>F</option>
                    </datalist>
                </li>
                <li>
                    <label for="fråga2">Var något extra svårt?</label>
                    <textarea id="msg" name="textruta">Skriv här</textarea>
                </li>
                <li>
                 	<label for="fråga2">Vad ska du förbättra till nästa gång?</label>
                    <textarea id="msg" name="textruta">Skriv här</textarea>
                </li>
                <input type="submit" value="Spara" id="spara" />
            </ol>
        </fieldset>
    </form>
</body>
<?php include('../php/footer.php'); ?>

</html>




