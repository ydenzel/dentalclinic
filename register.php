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
$sql = "SELECT userTypeID FROM usertype WHERE userType = 'patient'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_NUM);
// print_r($row);


// $sql = "INSERT INTO user(username,password,firstName,lastName,userTypeID) VALUES('" .$username2."','".$password."','".$firstname."','".$lastname."','".$row[0]."')";

// if($stmt = $conn->prepare("INSERT INTO user(username,password,firstName,lastName,userTypeID) VALUES(?,?,?,?,?)")){
// 	$stmt->bind_param("ssssi",$username2,$password2,$firstname,$lastname,$type);

$sql = "INSERT INTO user(username,password,firstName,lastName,userTypeID) VALUES(?,?,?,?,?)";
$stmt = $conn->stmt_init();

if(!$stmt->prepare($sql)){
	echo "Failed to prepare statement";
}else{
	$stmt->bind_param("ssssi",$username2,$password2,$firstname,$lastname,$type);

	$username2 = $_POST['username'];
	$password2 = $_POST['password'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$type = $row[0];

	$stmt->execute();
	$result = $stmt->get_result();
	print_r($result);

	echo("user added");

}


		



	// if($result->num_rows > 0){
	// 	printf_r($result);
	// 	echo 'USer iNSERTED';
	// }
	// $stmt->close();








?>