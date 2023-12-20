<?php
$servername = "100.99.88.100";
$username = "admin";
$password = "mvc123";
$dbname = "mvcstreet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}