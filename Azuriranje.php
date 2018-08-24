<?php
include_once("config.php");

if(isset($_POST['update'])){	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$ime = mysqli_real_escape_string($mysqli, $_POST['ime']);
	$priimek = mysqli_real_escape_string($mysqli, $_POST['priimek']);
	$datum = mysqli_real_escape_string($mysqli, $_POST['datum']);
	$dosje = mysqli_real_escape_string($mysqli, $_POST['dosje']);
	$policist = mysqli_real_escape_string($mysqli, $_POST['policist']);

		
	if(empty($ime) || empty($priimek) || empty($datum) || empty($dosje) || empty($policist)) {
			
		if(empty($ime)) {
			echo "<font color='red'>Potrebno vpisati IME.</font><br/>";
		}
		
		if(empty($priimek)) {
			echo "<font color='red'>Potrebno vpisati PRIIMEK.</font><br/>";
		}
		
		if(empty($datum)) {
			echo "<font color='red'>Potrebno vpisati DATUM.</font><br/>";
		}

		if(empty($dosje)) {
			echo "<font color='red'>Potrebno vpisati DOSJE.</font><br/>";
		}

		if(empty($policist)) {
			echo "<font color='red'>Potrebno vpisati POLICISTA.</font><br/>";
		}	
	} else {	
		$result = mysqli_query($mysqli, "UPDATE vabilo SET ime='$ime', priimek='$priimek', datum='$datum', dosje='$dosje', policist='$policist' WHERE id='$id'");
		
		header("Location: prikaz.php");
		}
	}
?>

<?php
	$id = isset($_GET['id']) ? $_GET['id'] : '';

	$sql = "SELECT * FROM vabilo WHERE id='$id'";
	$result = mysqli_query($mysqli, $sql);

	while($res = mysqli_fetch_array($result))
	{
		$ime = $res['ime'];
		$priimek = $res['priimek'];
		$datum = $res['datum'];
		$dosje = $res['dosje'];
		$policist = $res['policist'];
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ažuriranje vabljene osebe</title>
	
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
	<h1>Ažuriranje vabljene osebe</h1>
	</div>
	
	<div id="a">
	<a style="color:white;" href = "index.php">Nazaj</a>
	</div>
		
</main>

	<div id="b">
	<form name="obrazec1" method="post" action="Azuriranje.php">
		<table>
			<tr> 
				<td>Ime</td>
				<td><input type="text" name="ime" value="<?php echo $ime;?>"></td>
			</tr>
			<tr> 
				<td>Priimek</td>
				<td><input type="text" name="priimek" value="<?php echo $priimek;?>"></td>
			</tr>
			<tr> 
				<td>Datum</td>
				<td><input type="date" name="datum" value="<?php echo $datum;?>"></td>
			</tr>
			<tr> 
				<td>Dosje</td>
				<td><input type="int" name="dosje" value="<?php echo $dosje;?>"></td>
			</tr>
			<tr> 
				<td>Policist</td>
				<td><input type="text" name="policist" value="<?php echo $policist;?>"></td>
			</tr>
			<tr> 
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Ažuriraj"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>