<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
include 'db.php';
	$confirm = array();

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
	$Lng = mysqli_real_escape_string($conn, $_POST['Lng']);
	$Lat = mysqli_real_escape_string($conn, $_POST['Lat']);
	$cost = mysqli_real_escape_string($conn, $_POST['cost']);
	
	$order = mysqli_query($conn,"INSERT INTO `orders`(`o_name`, `o_bottle`,`Lng`, `Lat`, `o_cost`) VALUES ('$name','$quantity','$Lng','$Lat','$cost')");
	if ($order) {
		array_push($confirm,array('code'=>1));
	}else{
		array_push($confirm,array('code'=>0));
	}

	echo json_encode($confirm);
}