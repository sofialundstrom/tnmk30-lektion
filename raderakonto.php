<?php 	

	include('config.php');



	if (isset($_GET['personID'])) {
		// Formulera frågan
		$konto_delete = "DELETE FROM personer WHERE personer.personID= " . $_GET['personID'];
		// Ställ frågan till databasen
	if(mysqli_query($conn, $konto_delete)){
			mysqli_close($conn);
			header("Location: inställningar.php");
	}
}
	else{
		echo("Errorcode: " . mysqli_errno($conn) . "<br>");
		echo("Errormessage: " . mysqli_error($conn));
		}

?>