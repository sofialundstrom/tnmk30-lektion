<?php
	$conn = mysqli_connect('localhost', 'root', '', 'bggym');

		if (!$conn) {
			echo "Uppkopplingsfel mot databasen:" . mysqli_connect_error();
	    	exit();
		}

		// Byt teckentabell till utf-8 och kontrollera om det fungerade
		if (!mysqli_set_charset($conn, 'utf8')) {
	    	echo "Det blev fel vid ändring av teckentabell: ";
	    	echo mysqli_error($conn);
		}
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		
?>