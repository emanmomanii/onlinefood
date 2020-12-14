<?php
include 'HTML/conect.php';

$fname=$lname=$email=$pass="";
$repass=$_POST["repass"];
$fnameErr=$lnameErr=$emailErr=$passErr=$repassErr="";

$errors = array("fname"=>['Firstname Is Required','Only letters and white space allowed'],
			   "lname"=>['Lastname Is Required','Only letters and white space allowed'],
			   "email"=>['Email Is Required','Invalid email format'],
			   "pass"=>['Password Is Required','Incorrect Password'],
			   "repass"=>['Passwords do no match']);


$pattarns = array("fname"=>'/^[a-zA-Z ]*$/',
				 "lname"=>'/^[a-zA-Z ]*$/',
				 "pass"=>'/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/');



function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
		if(empty($_POST["firstname"]))
	    $fnameErr = $errors['fname'][0];
	    else
		{$fname = test_input($_POST["firstname"]);
         if (!preg_match($pattarns['fname'],$fname)) 
	      $fnameErr = $errors['fname'][1];
	     else $fnamedb = $fname;}

	
	   if(empty($_POST["lastname"]))
	    $lnameErr = $errors['lname'][0];
	    else
		{$lname = test_input($_POST["lastname"]);
        if (!preg_match($pattarns['lname'],$lname)) {
	         	$lnameErr = $errors['lname'][1];
	         	}
	         	else $lnamedb = $lname;}

	if(empty($_POST["pass"]))
	    $passErr = $errors['pass'][0];
	    else
		{$pass = test_input($_POST["pass"]);
        if (!preg_match($pattarns['pass'],$pass)) {
	         	$passErr = $errors['pass'][1];
	         	}
	         	else $passdb = $pass;}

        
	if(empty($_POST["email"]))
	   $emailErr = $errors['email'][0];
	else
		{$email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	         	$emailErr = $errors['email'][1];
	         	}
	     else $emaildb = $email;}
        
    if($repass !== $pass)
         {$repassErr = "Passwords do no match";}

}

if(!empty($fnamedb) && !empty($lnamedb) && !empty($emaildb) && !empty($passdb))
{$sql= 'INSERT INTO users (firstname , lastname  ,email, password)
    VALUES("'.$fnamedb.'", "'.$lnamedb.'", "'.$emaildb.'", "'.$passdb.'")';

if($conn->query($sql) === false)
 
	echo "Error" . $conn->error;}

$errs = array($fnameErr,$lnameErr,$emailErr,$passErr,$repassErr);
echo json_encode($errs);


$conn->close();
?>





