<?php
include("config.php");
?>

<?php 
$sql = "SELECT * FROM vabilo";
if( isset($_GET['search']) ){  
  $priimek = mysqli_real_escape_string($mysqli, htmlspecialchars($_GET['search'])); 
  $policist = mysqli_real_escape_string($mysqli, htmlspecialchars($_GET['search']));
  $sql = "SELECT * FROM vabilo WHERE priimek LIKE '$priimek' OR policist LIKE '$policist'" ; 
} 
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Iskanje vabljene osebe</title>
		
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
		top:40%;
		left:10%;
		width: 80%;
		position:absolute;
		color:white;
		font-size:18px;
	}
	</style>
	
	</head>
	<body background="img/background.jpg">
	<main>
		<div style="top:5%; left:30%; color:white; font-size:20px; ">
		<h1>Iskanje vabljene osebe</h1>
		</div>
	
		<div id="a">
		<a style="color:white;" href = "index.php">Nazaj</a>
		</div>
	
		<form action="" method="GET">
			<input type="text" placeholder="Vpiši priimek osebe" name="search">
			<input type="submit" value="Išči" name="btn">
		</form>
	</main>

		<div id="b">
		<table width='80%' border=0>
		<tr bgcolor='#07adf4'>
			<td>Ime</td>
			<td>Priimek</td>
			<td>Datum</td>
			<td>Dosje</td>
			<td>Policist</td>
		</tr>
			
		<?php 
        while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['ime']."</td>";
			echo "<td>".$row['priimek']."</td>";
			echo "<td>".$row['datum']."</td>";	
			echo "<td>".$row['dosje']."</td>";
			echo "<td>".$row['policist']."</td>";
			}
		?>
		</table>
		</div>
	</body>
</html>