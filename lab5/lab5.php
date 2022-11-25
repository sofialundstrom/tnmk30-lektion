<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="lab5.css" media="screen" rel="stylesheet" type="text/css"/>
		<title>Lab 5</title>
	</head>
	<body> 
        <h1>Inventory of set 5891-1:</h1>
    
        <h2>Apple tree house</h2>
        <img src="legohouse.jpg" id="house" alt="picture on lego house">

        <h3>Parts in set:</h3>
        <?php
        $connection = mysqli_connect ("mysql.itn.liu.se","lego","","lego");

        $prefix = 'https://weber.itn.liu.se/~stegu/img.bricklink.com/';
        if (!$connection){
            die ('MySQL connection error');
        }

        $contents = mysqli_query ($connection, "SELECT inventory.Quantity, colors.Colorname, parts.Partname, inventory.ColorID, inventory.ItemtypeID, inventory.ItemID FROM inventory, colors, parts WHERE inventory.SetID='5891-1' AND inventory.ItemtypeID='P' AND colors.ColorID=inventory.ColorID AND parts.PartID=inventory.ItemID");

        print ("<table>\n<tr>");

            print("<th>Quantity</th>");
            print("<th>File name</th>");
            print("<th>Picture</th>");
            print("<th>Color</th>");
            print("<th>Part name</th>");

        print "</tr>\n";

        while($row = mysqli_fetch_array($contents)) {
        
            $imagecolor = $row['ColorID'];
            $itemtype = $row['ItemtypeID'];
            $item = $row['ItemID'];
            $quantity = $row['Quantity'];
            $color = $row['Colorname'];
            $partname = $row['Partname'];
            $sqlImg = "SELECT * FROM images WHERE ItemtypeID = 'P' AND ItemID = '$item' AND ColorID = '$imagecolor'";
   
            $imagesearch = mysqli_query($connection, $sqlImg);

            $info = mysqli_fetch_array($imagesearch);
          
            if($info['has_jpg'] == 1) {
                
                $filename = "$itemtype/$imagecolor/$item.jpg";
            }
            else if($info['has_gif'] == 1) {
                $filename = "$itemtype/$imagecolor/$item.gif";
            }
            else {
                $filename = "noimage_small.png";
            }
            
             print "<tr>";
            
                print("<td>$quantity</td>");
                print("<td>$filename</td>");
                print("<td><img src='$prefix$filename' class='tabell' alt='bild'></td>");
                print("<td>$color</td>");
                print("<td>$partname</td>");
                
            print "</tr>\n";
        }
        mysqli_close($connection);
        ?>
    </table>
    </body>
</html>

