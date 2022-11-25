<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Utveckling</title>
    <link rel="stylesheet" type="text/css" href="../css/grafcss.css">
</head>
<body class="övnignar">
	<?php include('../php/header.php');

        $sql = "SELECT personer.användarnamn,övningar.namn, övningar.övningID, lyft.umax, lyft.datum FROM personer, övningar, lyft WHERE personID = " . $_SESSION['personID'] . " AND (lyft.person = personer.personID AND lyft.övning = övningar.övningID) ORDER BY lyft.umax DESC ";

    
        $resultatövningar = mysqli_query($conn, $sql); 
        $övningar = mysqli_fetch_all($resultatövningar, MYSQLI_ASSOC);
        print_r($övningar);
    ?>
    <form action="graf.php" method="POST">
        <div>
            <label for="övning">Välj en övning</label>
            <select name="övning_val" id="övning_val">
                <option value=''>--Välj en övning--</option>
                    <?php 
                    for ($i=0; $i < count($övningar); $i++) { 
                        echo "<option value=" . $övningar[$i]['övningID'] . ">".  $övningar[$i]['namn']. "</option>";
                    }
                    ?>
                </select>
            <input type="submit" value="Välj" />
        </div>
    </form>
      <div class="värden">
            <div class="ökning">
                <h2>Ökning: </h2>
            </div>
            <div class="pb">
                <h2>Personligt bästa: </h2>
            </div>
        </div>
    <?php include('../php/footer.php'); ?>
</body>
</html>

