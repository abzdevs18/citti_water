<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include 'db.php';

	// $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

	$data = mysqli_query($conn, "SELECT * FROM `orders` WHERE `status` = 0");
	$rest = array();
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($rest,array('o_id'=>$row['o_id'],'o_bottle'=>$row['o_bottle'],'o_cost'=>$row['o_cost'],'date_of_order'=>$row['date_of_order'],'time_of_delivery'=>$row['time_of_delivery'],'Lng'=>$row['Lng'],'Lat'=>$row['Lat'],));
	}

	echo json_encode($rest);
	
}