<?php
include_once ("db.php");

$id = $_REQUEST['o_id'];
$sql= mysqli_query($conn,"UPDATE orders SET status = 4 WHERE o_id = '$id'");

?>