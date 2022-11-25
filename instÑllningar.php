<!DOCTYPE html>
<html lang="sv">
<link rel="stylesheet" type="text/css" href="../css/inställningar.css">
<body>
    <?php include('../php/header.php'); ?>
    <div class="text">
    	<a href="#" class="knapp1a">
	    	<div class="knapp1">
	    		 <p>Ändra användarnamn<p>
	    	</div>
    	</a>
       
        <a href="#" class="knapp2a">
	    	<div class="knapp2">
	    		 <p>Ändra lösenord<p>
	    	</div>
    	</a>
        <a href="raderakonto.php" class="knapp3a">
	    	<div class="knapp3">
	    		 <p>Radera konto<p>
	    	</div>
    	</a> 
        <?php
        if (isset($_POST['profil'])) {
            $profil_delete = "DELETE FROM personer WHERE profil =" . $_POST['profil'];
            if (mysqli_query($conn, $profil_delete)) {
                mysqli_close($conn);
                header("Location: inställningar.php");
            } 
        }
        ?>
        <input type="submit" name="submit" value="Logga ut">
    </div>
    <?php include('../php/footer.php'); ?>
</body>
</html>
