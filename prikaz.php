<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM vabilo ORDER BY datum DESC");
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Prikaz vabljenih oseb</title>
	
	<style>
	html, body {
		max-width: 100%;
		overflow-x: hidden;
	}

	main {
		width: 80%;
		height: 80%;
		border: none;
		position: absolute;
		left: 10%;
		top: 10%;
		font-family: verdana;
		font-size: 150px;
		text-align: center;
	}
	
	#a {
		top:5%;
		left:80%;
		position:absolute;
		color:white;
		font-size:25px;
		}

	#b {
		top:30%;
		left:42%;
		position:absolute;
		color:white;
		font-size:18px;
	}
	</style>
</head>

<body background="img/background.jpg">
<main>
	<div style="top:5%; left:30%; color:white; font-size:20px; ">
	<h1>Prikaz vabljenih oseb</h1>
	</div>
	
	<div id="a">
	<a style="color:white;" href = "index.php">Nazaj</a>
	</div>
	
	<table style="color:white;" width='80%' border=0>
		<tr bgcolor='#07adf4'>
			<td>Ime</td>
			<td>Priimek</td>
			<td>Datum</td>
			<td>Dosje</td>
			<td>Policist</td>
			<td>Ažuriraj</td>
		</tr>

		<?php 
			while($res = mysqli_fetch_array($result)) 
			{ 		
				echo "<tr>";
				echo "<td>".$res['ime']."</td>";
				echo "<td>".$res['priimek']."</td>";
				echo "<td>".$res['datum']."</td>";	
				echo "<td>".$res['dosje']."</td>";
				echo "<td>".$res['policist']."</td>";
				echo "<td><a style=\"color:white;\" href=\"Azuriranje.php?id=$res[id]\">Ažuriraj</a> | <a style=\"color:white;\" href=\"izbris.php?id=$res[id]\" onClick=\"return confirm('Ste prepričani, da želite izbrisati?')\">Izbriši</a></td>";		
			}
		?>
	</table>
</main>
</body>
</html>
