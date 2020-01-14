<?php
include_once ("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['o_id'];
    $sql= mysqli_query($conn,"UPDATE orders SET status = 4 WHERE o_id = '$id'");

}
?>