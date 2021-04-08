<?php

require 'config/constant.php';

$errors=array();
$email=$_POST['email'];
$password=$_POST['password'];



//DATABASE CONNECTION
$conn= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
if ($conn->connect_error) {
	die("Failed to connect :".$conn->connect_error);
}else {
	$stmt =$conn->prepare("SELECT * FROM admin WHERE email=?");
	
	$stmt->bind_param("s",$email);
	
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if ($stmt_result->num_rows > 0) {
		$data =$stmt_result->fetch_assoc();
		if ($data['password']===$password) {
			header('location: index.php');
		}
	else{
		header('location:error.php');

	}		
	}
}
