<?php
include 'db.php';

$list = array();

$email = $_POST['adminUserName'];
$pw = $_POST['adminUserPass'];


$sql = "SELECT * FROM admin_signup WHERE admin_email='$email' OR admin_password='$pw'";
$result = mysqli_query($conn, $sql);

if ($result) {
	$id = mysqli_fetch_assoc($result);
	$userId = $id['admin_id'];
	array_push($list, array('status' => 1,'id'=>$userId));
}else{
	array_push($list, array('status' => 0));
}

echo json_encode($list);