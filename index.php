<?php
session_start();
session_destroy();
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Evidenca vabljenih oseb 2018</title>
	
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
	
	#povezava1 {
		position:absolute;
		top:5%;
		right:40%;
		width:40%;
		font-size:30px;
		cursor: pointer;
		}

	#povezava2 {
		position:absolute;
		top:15%;
		right:40%;
		width:40%;
		font-size:30px;
		cursor: pointer;
		}
		
	#povezava3 {
		position:absolute;
		top:25%;
		right:40%;
		width:40%;
		font-size:30px;
		cursor: pointer;
		}
		
	#povezava4 {
		position:absolute;
		top:35%;
		right:40%;
		width:40%;
		font-size:30px;
		cursor: pointer;
		}

	</style>
</head>

<body background="img/background.jpg">
<main>
		<div id="povezava1">
		<a style="color:white" href = "VnosO.php">Vnos vabljene osebe</a>
		</div>
				
		<div id="povezava2">
		<a style="color:white" href = "Iskanje.php">Iskanje vabljene osebe</a>
		</div>
		
		<div id="povezava3">
		<a style="color:white" href = "prikaz.php">Prikaz vseh vabljenih oseb</a>
		</div>
				
</main>
</body>
</html>
