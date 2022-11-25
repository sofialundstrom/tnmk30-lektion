 <?php

    include('config.php'); 
    $timestamp = date("Y-m-d H:i:s");

    $faktor = array(0, 1, 1.0475, 1.300, 1.575, 1.2000, 1.2420, 1.2840, 1.3260, 1.3680, 1.4100, 1.4533, 1.5100);

    if (isset($_POST['vikt']) && isset($_POST['reps'])) {
        if (isset($_POST['vikt']) && isset($_POST['reps']) != "") {
            if (isset($_SESSION['personID'])) {
                echo "Session PersonID: " . $_SESSION['personID'];
            } else {
                echo "Session PersonID är ej satt";
            }
            if (isset($_SESSION['inloggad'])) {
                echo "Session inloggad: " . $_SESSION['inloggad'];
            } else {
                echo "Session inloggad är ej satt";
            }
            if ($_POST['reps'] > 12) {
                $_POST['reps'] = 12;
                $sql1 = "INSERT INTO lyft (lyftID,person, övning, reps, vikt, umax, datum) VALUES (NULL". ",'" . $_SESSION['personID'] . "', '3', '" . $_POST['reps'] ."','" . $_POST['vikt'] . "','" . ($_POST['vikt'] * $faktor[$_POST['reps']]) . "','" . "$timestamp" . "')";

                    if (mysqli_query($conn, $sql1)) {
                        header('location: start.php');
                    }else{
                        echo 'query error: ' . mysqli_error($conn);
                    }

            } else {
               $sql1 = "INSERT INTO lyft (lyftID,person, övning, reps, vikt, umax, datum) VALUES (NULL". ",'" . $_SESSION['personID'] . "', '3', '" . $_POST['reps'] ."','" . $_POST['vikt'] . "','" . ($_POST['vikt'] * $faktor[$_POST['reps']]) . "','" . "$timestamp" . "')";

             if (mysqli_query($conn, $sql1)) {
                        header('location: start.php');
                    }else{
                        echo 'query error: ' . mysqli_error($conn);
                    }
            } 
        }
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Frivändningar</title>
</head>
<body class="övnignar">
	<?php include('../php/header.php'); ?>
    <form action="ett.php" method="POST">
        <fieldset>
            <legend>Frivändingar</legend>
            <ol>
                <li>
                    <label for="username">Vikt</label>
                    <input type="number" name="vikt" id="vikt">
                </li>
                <li>
                    <label for="reps">Reps</label>
                    <input type="number" name="reps" id="reps">
                </li>
                <input type="submit" value="Spara" id="spara" />
                <?php  

                ?>
            </ol>
        </fieldset>
    </form>
    <form action="loggbok.php">
        <input type="submit" value="Avsluta pass" id="pass" />
    </form>
    <?php include('../php/footer.php'); ?>
</body>
</html>
<?php
    //mysqli_free_result($result1);

    mysqli_close($conn);
?>