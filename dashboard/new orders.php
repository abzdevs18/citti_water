<?php 

include_once("../included/db.php");
session_start();
$sql = mysqli_query($conn,"SELECT orders.o_id AS o_id, user.name AS name, orders.o_bottle AS o_bottle, orders.o_cost AS o_cost FROM user LEFT JOIN orders ON orders.user_id = user.id WHERE status = 0 ORDER BY o_id DESC");

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  text-align: left;
  padding: 15px;
  text-align: center;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<nav>
	<div class="citi">
    <span>|</span>
		<li><a href="../admin_interface.php">Dashboard</a></li>
	</div>
</nav>

<div class="orders">
  <h1>New Orders</h1>
</div>

<div style="padding-top: 140px; padding-left: 100px;">
	<table>
  <tr>
    <th>Order ID</th>
    <th>Name</th>
    <th>Number of Bottles</th>
    <th>Cost</th>
    <th>Action</th>

  </tr>

<?php 

  while($rows = mysqli_fetch_array($sql)){?>

  <tr>
    <td><?php echo $rows["o_id"]; ?></td>
    <td><?php echo $rows["name"]; ?></td>
    <td><?php echo $rows["o_bottle"]; ?></td>
    <td>$<?php echo $rows["o_cost"]; ?></td>
    <td> <a href="../included/confirm_order_web.php?o_id=<?php echo $rows['o_id'];?>"> Confirm </a> | <a href="../included/decline_order_web.php?o_id=<?php echo $rows['o_id'];?>"> Decline </a> </td>
  </tr>
  
<?php 
} 
?>

</table>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="footer-container" style="text-align: center;">
			<div class="copyright-text"><i class="far fa-copyright"></i> Copyright 2019. Citiwater.</div>
</div>

</body>
</html>