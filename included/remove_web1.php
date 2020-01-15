<?php
include_once ("db.php");

$id = $_REQUEST['o_id'];
$sql= mysqli_query($conn,"UPDATE orders SET status = 3 WHERE o_id = '$id'");

header("Location: ../dashboard/confirmed orders.php");
					exit();
?>