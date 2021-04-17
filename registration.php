<?php

$servername = "1XvT2tXL2V";
$username = "1XvT2tXL2V";
$password = "XbaKFbxQ98";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, '1XvT2tXL2V');

$sql = mysqli_query($conn, "SELECT * FROM tbl_countries");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
	if($_POST)
{
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$position=$_POST['position'];
	$company=$_POST['company'];
	$country=$_POST['country'];
	$code=$_POST['code'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];

	$insert = "INSERT INTO tbl_registrations
	VALUES (NULL, '$first_name', '$last_name', '$gender', '$age', '$position', '$company', '$country', '$code', '$phone', '$email')";

	if (mysqli_query($conn, $insert)) {
		echo "New record created successfully";
		header('Location: '. "http://" . $_SERVER['SERVER_NAME'] ."/fardin/event/index.php?mess=1");
		exit();
	  
	} else {
	  echo "Error: " . $insert . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}

}




?>
