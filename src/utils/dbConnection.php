<?php
// Database connection 
$conn = mysqli_connect('localhost', 'root', '', 'myspotify');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
		
?>