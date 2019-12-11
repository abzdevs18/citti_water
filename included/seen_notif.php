<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$order_id = mysqli_real_escape_string($conn,$_POST['order_id']);
	$update = mysqli_query($conn,"UPDATE `orders` SET seen = 1 WHERE o_id = '$order_id'");
}