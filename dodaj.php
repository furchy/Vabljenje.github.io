<html>
<head>
	<title>Vnos vabljene osebe</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
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
		
		echo "<br/><a href='javascript:self.history.back();'>Nazaj</a>";
	} else { 
			
		$result = mysqli_query($mysqli, "INSERT INTO vabilo (ime, priimek, datum, dosje, policist) VALUES ('$ime', '$priimek', '$datum', '$dosje', '$policist')");
		
		echo "<font color='blue'>Vnos vabljene osebe je uspel.";
		echo "<br/><a href='prikaz.php'>Prikaži vse vabljene osebe</a>";
		echo "<br/><a href='VnosO.php'>Vnesi novo vabljeno osebo</a>";
	}
}
?>
</body>
</html>
