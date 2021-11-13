<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "ddoxems";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>