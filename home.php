<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dentalclinic";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}

$sql = "SELECT username, password, userTypeID FROM user where username='".$_POST['username']."' AND password = '".$_POST['password']."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	$row = $result->fetch_array(MYSQLI_NUM);
	// print_r($row);
	$result = $conn->query("SELECT userType FROM usertype WHERE userTypeID = ".$row['2']);
	$row = $result->fetch_array(MYSQLI_NUM);
	print_r($row);
	if ($row[0] == "admin"){
		header("location:adminDashboard.php");
	}else if($row[0]=="patient"){
		header("location:patientDashboard.php");
	}else{
		header("location:doctorDashboard.php");
	}


	
}
else
{
	echo "Invalid username and password";
	
	
}


?>