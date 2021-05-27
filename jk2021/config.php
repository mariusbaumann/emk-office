<?php

$host = "emkyoung.mysql.db.internal";
$userName = "emkyoung_jk2021";
$password = "-uKgBNim*Pd6FFkULKYN";
$dbName = "emkyoung_jk2021";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
