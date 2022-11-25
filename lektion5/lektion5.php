<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="lektion5.css" media="screen" rel="stylesheet" type="text/css"/>
		<title>Data till databasen, lektion 5</title>
	</head>
	<body> 
        <h1>Generell fråga till 'tnmk30'</h1>
    
        <?php
        $connection = mysqli_connect ("mysql.itn.liu.se","nikro27","","nikro27");

        if (!$connection){
            die ('MySQL connection error');
        }

        $contents = mysqli_query ($connection, "SELECT year, gender, favworkchild FROM tnmk30 WHERE year = 2003");

        print ("<table>\n<tr>");

        while($fieldinfo = mysqli_fetch_field($contents)) {
            print("<th>". $fieldinfo->name . "</th>");
        }

        print "</tr>\n";

        while($row = mysqli_fetch_row($contents)) {
        
            
             print "<tr>";
            
            for($i=0; $i<mysqli_num_fields($contents); $i++) {

               
                print("<td>$row[$i]</td>");

                
            }
            print "</tr>\n";
           
            mysqli_close($connection);
        }

        ?>

    </table>

    </body>
</html>

