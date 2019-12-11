<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$confirm = array();
	$applicant_fk = mysqli_real_escape_string($conn,$_POST['name']);
	$job = mysqli_query($conn,"SELECT * FROM `orders` WHERE name LIKE '$applicant_fk' AND ( status = 1 AND seen = 0 )");
	$num = mysqli_num_rows($job);
	if ($num > 0) {
		$row = mysqli_fetch_assoc($job);
		$order_id = $row['o_id'];
		$applicant_fk = $row['o_name'];

		array_push($confirm,array('code'=>1,'order_id' => $order_id,'client'=>$applicant_fk));
	}else{
		array_push($confirm, array('code'=>0));
	}
	echo json_encode($confirm);
}