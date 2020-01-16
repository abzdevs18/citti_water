<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include 'db.php';

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	
	mysqli_query($conn, "UPDATE `orders` SET `status` = 1 WHERE `o_id`= $id");

	
// }