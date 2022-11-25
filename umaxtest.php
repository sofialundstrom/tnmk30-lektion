<?php  
// Koppla upp databasen
	include('config.php'); 

	$sql = 'SELECT * FROM lyft ORDER BY övning AND datum';

	$result = mysqli_query($conn, $sql);

	$umaxs = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);

	mysqli_close($conn);


	$sqlvikt = 'SELECT vikt FROM lyft';
	$sqlreps = 'SELECT reps FROM lyft';

 

	$sqlumax = "INSERT INTO lyft (lyftID, person, övning, reps, vikt, umax, datum) VALUES (NULL, 'PERSONID', 'ÖVNINGSID', 'REPS', 'VIKT', 'FORMEL', current_timestamp())";



	$sqlland = "INSERT INTO länder (landID, land) VALUES (NULL, '" . $_GET['land'] . "')";
			// Ställ frågan till databasen
			$resultland = mysqli_query($conn, $sqlland);


?>
<!DOCTYPE html>
<html>

	<?php include('header.php') ?>

	<div class="container">
		<div class="row">
			
			<?php foreach($umaxs as $umax){ ?>

				<div class="col">
					<div class="card">
						<div class="card-content">
							<?php echo $umax['lyftID'] ?>
							<?php echo $umax['vikt'] ?>
							<?php echo $umax['reps'] ?>
							<?php echo $umax['umax'] ?>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>

	<?php include('footer.php') ?>

</html>