<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "Neverland_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>