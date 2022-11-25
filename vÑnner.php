<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vänner</title>
</head>
<body class="övnignar">

<?php 
	// Koppla upp databasen
	include('config.php'); 

		if (isset($_GET['användarnamn'])) {
		if ($_GET['stad'] != "") {
			$result = mysqli_query($conn, $sql);	
		}
	}

	$sql = "SELECT personer.användarnamn, övningar.namn, övningar.övningID, lyft.umax, lyft.datum FROM personer, övningar, lyft WHERE (lyft.person = personer.personID AND lyft.övning = övningar.övningID) ORDER BY lyft.umax DESC";
	$result = mysqli_query($conn, $sql);
	$anvädarnamn = mysqli_fetch_all($result, MYSQLI_ASSOC);
	?>

	<div class="leaderboard">
		<?php include('../php/header.php'); ?>
	    <h2>LEADERBOARD</h2>
	    <table class="etta">
	    <?php

	    for($j=1; $j < 4; $j++) {
	    	for ($i = 0; $i < 3; $i++) {
				if ($i == 0) {
					echo "<td>"  . "$j. " . $användarnamn[$j - 1]['användarnamn'] . " ". $användarnamn[$j - 1]['namn']. " ". $användarnamn[$j -1]['umax'] .  "kg </td>";
				}
			}	
	    }

		?>
		</table>
	</div>
    <?php include('../php/footer.php'); ?>
</body>
</html>
