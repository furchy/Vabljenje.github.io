<?php
include("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM vabilo WHERE id=$id");

header("Location:prikaz.php");
?>