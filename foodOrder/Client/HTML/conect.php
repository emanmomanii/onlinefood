<?php
$servername = "localhost";
$username = "root";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, "" ,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>