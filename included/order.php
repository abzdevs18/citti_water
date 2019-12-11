<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
include 'db.php';
	$confirm = array();	

	//timezone is set to manila
	date_default_timezone_set('Asia/Manila');
	// $time = date("D, M d, g:i A");
	$date = date("M. d, Y");

	$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
	$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
	$prefTime = mysqli_real_escape_string($conn, $_POST['prefTime']);
	$Lng = mysqli_real_escape_string($conn, $_POST['Lng']);
	$Lat = mysqli_real_escape_string($conn, $_POST['Lat']);
	$cost = mysqli_real_escape_string($conn, $_POST['cost']);
	
	$order = mysqli_query($conn,"INSERT INTO `orders`(`user_id`, `o_bottle`, `Lng`, `Lat`, `o_cost`, `date_of_order`, `time_of_delivery`, `seen`, `status`) VALUES ('$user_id','$quantity','$Lng','$Lat','$cost','$date', '$prefTime',0,0)");
	if ($order) {
		array_push($confirm,array('code'=>1));
	}else{
		array_push($confirm,array('code'=>0));
	}

	echo json_encode($confirm);
}