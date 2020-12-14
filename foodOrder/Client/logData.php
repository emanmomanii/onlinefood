<?php
include 'HTML/conect.php';

$email = $_POST['email'];
$pass = $_POST['pass'];



if ($_SERVER["REQUEST_METHOD"] == "POST"){
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = 'SELECT email, password  FROM users WHERE email = "' . $email .'" AND password = "' . $pass.'"' ;
$result = $conn->query($sql);


if (mysqli_num_rows($result) == 0) 
	echo "Encorrect Email Or Password";
	 
}


$conn->close();
?>