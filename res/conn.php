<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mvcstreet";

// Create connection
$conn = new mysqli(
);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}