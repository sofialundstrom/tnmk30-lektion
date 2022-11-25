<!DOCTYPE html>
<html lang="sv">
    <head>
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
        <form action="formular.php" method="post">
            <div>
                <label for="author">Namn: </label><br>
                <input type="text" name="author" id="author" required>
            </div>
            <div>
                <label for="heading">Rubrik: </label><br>
                <input type="text" name="heading" id="heading" required>
            </div>
            <div>
                <label for="entry">Inlägg: </label><br>
                <textarea name="entry" id="entry" cols="50" rows="10" required></textarea>
            </div>
            <div>
                <label for="password">Lösenord: </label><br>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" value="Posta!">
            
        </form>

    </body>
</html>