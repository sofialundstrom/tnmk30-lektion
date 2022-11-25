<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="lektion5.css" media="screen" rel="stylesheet" type="text/css"/>
		<title>Lab 5</title>
	</head>
	<body> 
        <h1>Inventory of set 10267:</h1>
    
        <h2>Parts in set:</h2>
        <?php
        $connection = mysqli_connect ("mysql.itn.liu.se","lego","","lego");

        if (!$connection){
            die ('MySQL connection error');
        }

        $contents = mysqli_query ($connection, "SELECT * FROM lego");

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

