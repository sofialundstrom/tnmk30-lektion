<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <title>Lab 4</title>    
</head>
<body>
    <div id="header">
        <ul>
            <li><a href="formular.php">Gamla inlägg</a></li>
            <li><a href="lab3.php">Nytt inlägg</a></li>
        </ul>
    </div>
    <div class="menu">
    <form action="formular.php" method="GET">
        <input type="text" name="search" id="search" placeholder="Search">
        <input type="submit" value="Sök!">
        <input type="radio" value="5" name="show" id="five">
        <label for="five">5</label>
        <input type="radio" value="10" name = "show" id="ten">
        <label for="ten">10</label>
    </form>
    </div>

    <?php

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $connection = mysqli_connect("mysql.itn.liu.se","blog_edit","bloggotyp", "blog"); 
    $passwordAdmin = 'abc'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $author = mysqli_real_escape_string($connection, $_POST['author']);
        $heading = mysqli_real_escape_string($connection, $_POST['heading']);
        $text = mysqli_real_escape_string($connection, $_POST['entry']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        
 
        
        if ($password == $passwordAdmin) {
            
            $query = "INSERT INTO soflu921 VALUES(NULL, '$author', '$heading', '$text')";
            
            mysqli_query($connection, $query);
           
            
        }
        else {
            echo "<script>alert('Fel lösenord');</script>";
        }
    }

        if (isset($_GET['search'])) {
            if(isset($_GET['show'])) {
                $result = mysqli_query($connection, "SELECT * FROM soflu921 WHERE entry_heading LIKE '". $_GET['search'] ."' ORDER BY entry_date DESC LIMIT ". $_GET['show'] );                                             
            }
            else {  
                $result = mysqli_query($connection, "SELECT * FROM soflu921 WHERE entry_heading LIKE '". $_GET['search'] ."' ORDER BY entry_date DESC LIMIT 5");
            }

        }
        else {
            if (isset($_GET['show'])) {
                $result = mysqli_query($connection, "SELECT * FROM soflu921 ORDER BY entry_date DESC LIMIT '". $_GET['show'] ."'");                                               
            }
            else {
                $result = mysqli_query($connection, "SELECT * FROM soflu921 ORDER BY entry_date DESC LIMIT 5");    
            }
        }

        // Skriv ut alla poster i svaret                                  
        while ($row = mysqli_fetch_array($result)) {                      
            $heading = $row['entry_heading'];                               
            print("<h2>$heading</h2>\n");                                   
            $author =$row['entry_author'];                                 
            $date = $row['entry_date'];                                     
            print("<p>$author, $date</p >\n");                              
            $text = $row['entry_text'];                               
            print("<p>$text</p>\n");                                        
            print("<hr/>");                                                 
        }             
        
        
    ?>
</body>
</html>