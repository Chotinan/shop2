<?php
$servername = "localhost";
$username  = "root";
$password = "1234";
$dbname="shop";

// Create connection
$conn = new mysqli($servername, $username, $passwordpw, $$dbname);


// Check connection
if ($conn->connect_error) {
  die("Conn failed: " . $conn->connect_error);
}
?>