<?php
	require("functions.php");
	
	//kui pole sisseloginud, siis sisselogimise lehele
	if(!isset($_SESSION["userId"])){
		header("Location: login.php");
		exit();
	}
	
	//kui logib välja
	if (isset($_GET["logout"])){
		//lõpetame sessiooni
		session_destroy();
		header("Location: login.php");
	}
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>U Pictures</title>
</head>

<body>
	<p><a href="?logout=1">Logi välja</a>!</p>
	<p><a href="main.php">Info kasutajate kohta</a></p>	
	
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>Eesnimi</th>
			<th>Perekonnanimi</th>
			<th>Kasutajanimi</th>
		</tr>
		<tr>
			<td>Krok</td>
			<td>Odill</td>
			<td>Uim@n.ee</td>
		</tr>
	
	
	</table>
	
	
</body>	
</html>