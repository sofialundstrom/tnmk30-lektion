<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <link href="style.css" media="screen" rel="stylesheet" type="text/css">
        <meta charset = "utf-8">
        <title>Lab 3</title>
    </head>
    <body>
        <div id="header">
            <ul>
                <li><a href="formular.php">Gamla inlägg</a></li>
                <li><a href="lab3.php">Nytt inlägg</a></li>
            </ul>
        </div>
    
        <div class="container">
            <?php 
            if(session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            
            
             
                    
            ?>
        </div>
    </body>
</html>