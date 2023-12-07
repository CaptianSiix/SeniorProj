<?php
// Gets all the information from teh server may need to change it locally or live
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "seniorproject";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
