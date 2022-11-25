<head>
	<title>Oskarshamns Basketbollklubb</title>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montagu+Slab&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/stylecss.css">
    <link rel="stylesheet" type="text/css" href="../css/övningcss.css">
    <link rel="stylesheet" type="text/css" href="../css/vännercss.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
   
</head>

<?php 
	// Koppla upp databasen
	include('config.php');

?>

<body class="övnignar">
	<header>
		<div class="bild">
			<img src="../bilder/obbk.png">
		</div>
		<nav class="">
		<div class="loggor"> 
			<ul>
				<a href="start.php" target="_self">
					<li>
						<i class="large material-icons">home</i>
						Hem
					</li>
				</a>
				<a href="loggbok.php" target="_self">
					<li>
						<i class="large material-icons">book</i>
						Loggbok
					</li>
				</a>
				<a href="graf.php" target="_self">
					<li>
						<i class="large material-icons">show_chart</i>
						Utveckling
					</li>
				</a>
				<a href="vänner.php" target="_self">
					<li>
						<i class="large material-icons">people</i>
						Vänner
					</li>
				</a>
				<a href="inställningar.php" target="_self">								
					<li>
						<i class="large material-icons">build</i>
						Inställningar
					</li>
				</a>
			</ul>		
 		</div> 	
 	</nav>
	</header>
	