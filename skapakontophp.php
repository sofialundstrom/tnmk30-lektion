<?php 
	include('config.php');
	if (isset($_POST['förnamn']) && isset($_POST['efternamn']) && isset($_POST['användarnamn']) && isset($_POST['lösenord'])) {
		$hash = hash('sha256', $_POST['lösenord']);
		if ($_POST['förnamn'] && $_POST['efternamn'] && $_POST['användarnamn'] && $_POST['lösenord'] != "") {			
			$sqlskapakonto = "INSERT INTO personer (personID, förnamn, efternamn, användarnamn, lösenord) VALUES (NULL, '" . $_POST['förnamn'] . "', '" . $_POST['efternamn'] . "', '" . $_POST['användarnamn'] . "', '" . $hash . "')";

			$resultskapakonto = mysqli_query($conn, $sqlskapakonto);
		} 
		else { 
			echo "Du måste fylla i alla fält.";
		} 
	}
	
	header("Location: inloggning.php");
	exit;
?>