<?php
include('config.php');


if (isset($_POST['användarnamn']) && isset($_POST['lösenord'])){
    if ($_POST['användarnamn'] && $_POST['lösenord'] != "") {
        
        $sql = "SELECT användarnamn, personID, lösenord FROM personer WHERE användarnamn = '" .  $_POST['användarnamn'] . "'";
        $result = mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);

        $användarnamn = $result[0]['användarnamn'];
        $lösenord = $result[0]['lösenord'];
        $personID = $result[0]['personID'];

        if ($användarnamn == $_POST['användarnamn'] && $lösenord == hash('sha256', $_POST['lösenord'])) {
            $_SESSION['personID'] = $personID;
            $_SESSION['inloggad'] = true;

            header("Location: start.php");
            exit();
        }
        else {
            echo "Du har fel användarnamn eller lösenord.";
        }
    } 
}
?>