 <?php

    include('config.php'); 

    $timestamp = date("Y-m-d H:i:s");

    $faktor = array(0, 1, 1.00350, 1.0800, 1.1150, 1.1500, 1.1800, 1.2200, 1.2550, 1.2900, 1.3250, 1.3671, 1.4105);

    if (isset($_POST['vikt']) && isset($_POST['reps'])) {
        if (isset($_POST['vikt']) && isset($_POST['reps']) != "") {
            if ($_POST['reps'] > 12) {
                $_POST['reps'] = 12;
                $sql3 = "INSERT INTO lyft (lyftID,person, övning, reps, vikt, umax, datum) VALUES (NULL, '1', '2', '" . $_POST['reps'] ."','" . $_POST['vikt'] . "','" . ($_POST['vikt'] * $faktor[$_POST['reps']]) . "','" . "$timestamp" . "')";
           
                    if (mysqli_query($conn, $sql3)) {
                        header('location: start.php');
                    }else{
                        echo 'query error: ' . mysqli_error($conn);
                    }

            } else {
                $sql3 = "INSERT INTO lyft (lyftID,person, övning, reps, vikt, umax, datum) VALUES (NULL, '1', '2', '" . $_POST['reps'] ."','" . $_POST['vikt'] . "','" . ($_POST['vikt'] * $faktor[$_POST['reps']]) . "','" . "$timestamp" . "')";

           if (mysqli_query($conn, $sql3)) {
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
    <title>Bänkpress</title>
</head>
<body class="övnignar">
    <?php include('../php/header.php'); ?>
    <form action="tre.php" method="POST">
        <fieldset>
            <legend>Bänkpress</legend>
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
    //mysqli_free_result($result3);

    mysqli_close($conn);
?>