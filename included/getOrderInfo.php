<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include 'db.php';

	$id = mysqli_real_escape_string($conn, $_POST['id']);

	$data = mysqli_query($conn, "SELECT * FROM `orders` WHERE `status` = 0 AND `o_id` = $id");
	$rest = array();
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($rest,array('o_id'=>$row['o_id'],'o_name' => $row['o_name'],'o_bottle'=>$row['o_bottle'],'Lng'=>$row['Lng'],'Lat'=>$row['Lat'],'o_cost'=>$row['o_cost']));
	}

	echo json_encode($rest);
	
}