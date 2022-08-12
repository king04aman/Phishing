<?php 

$EMAIL=$_POST['email'];
$PASSWORD=$_POST['pass'];

$link = mysqli_connect("localhost", "root", "", "");

if($link === false){
	die("ERROR: Could not connect.".mysqli_connect_error());
}

$sql = "INSERT INTO data (username, password) VALUES ('$EMAIL', '$PASSWORD')";

if(mysqli_query($link, $sql)){
	header("Location:/");
	exit();
} else{
	echo "ERROR: Could not be able to execute $sql.".mysqli_error($link);
}

mysql_close($link);

 ?>
