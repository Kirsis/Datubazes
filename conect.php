<?php
$servername = "fdb29.awardspace.net";
$username = "3625174_uvis";
$password = "SvetlanasTheBest132";
$dbname = "3625174_uvis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>