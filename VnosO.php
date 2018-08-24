<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Vnos vabljene osebe</title>
		
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
	<h1>Vnos vabljene osebe</h1>
	</div>
	
	<div id="a">
	<a style="color:white;" href = "index.php">Nazaj</a>
	</div>
	
</main>

	<div id="b">
	<form action="dodaj.php" method="post" name="obrazec1">
		<table>
			<tr> 
				<td>Ime</td>
				<td><input type="text" name="ime"></td>
			</tr>
			<tr> 
				<td>Priimek</td>
				<td><input type="text" name="priimek"></td>
			</tr>
			<tr> 
				<td>Datum</td>
				<td><input type="date" name="datum"></td>
			</tr>
			<tr> 
				<td>Dosje</td>
				<td><input type="int" name="dosje"></td>
			</tr>
			<tr> 
				<td>Policist</td>
				<td><input type="text" name="policist"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Dodaj"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>
