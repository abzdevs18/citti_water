<?php
include_once ("db.php");

$id = $_REQUEST['o_id'];
$sql= mysqli_query($conn,"UPDATE orders SET status = 2 WHERE o_id = '$id'");

header("Location: ../dashboard/new orders.php");
					exit();
?>