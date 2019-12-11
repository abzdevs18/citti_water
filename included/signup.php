<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include 'db.php';
	$confirm = array();

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
	$sql = "INSERT INTO `user` (`username`, `name`, `password`) VALUES ('$username', '$name', '$hashedpassword')";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		$last_id = mysqli_insert_id($conn);
		array_push($confirm,array('code'=>1,'user_id'=>$last_id));			
	}
	echo json_encode($confirm);
}