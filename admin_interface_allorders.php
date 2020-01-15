<?php 

include_once("included/db.php");
session_start();
$sql = mysqli_query($conn,"SELECT orders.o_id AS o_id, user.name AS name, orders.o_bottle AS o_bottle, orders.o_cost AS o_cost, orders.date_of_order AS date_of_order FROM user LEFT JOIN orders ON orders.user_id = user.id ORDER BY o_id DESC");

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin_interface.css">


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
    <h3>Purify your water. Purify your life.</h3>
	</div>
</nav>

<div class="nav3">
<ul>
  <li style="margin-left: 180px;"><a  href="admin_interface.php">Home</a></li>
  <li style="margin-right: 40px; float: right;"><a class="active" href="included/logout_included.php">Logout</a></li>
</ul>
</div>

<div class="nav2">
<ul>
  <li><img src="images/citi.png" alt="citi logo" width="185" height="115"></li>
  <li><a href="admin_interface.php">Dashboard</a></li>
  <li><a href="admin_interface_delivery.php">Delivered</a></li>
  <li><a href="admin_interface_charts.php">Charts</a></li>
  <li><a href="admin_interface_calendar.php">Removed</a></li>
  <li><a style="color: blue;" href="admin_interface_accounts.php">All Orders</a></li>
</ul>
</div>

<div class="orders">
  <h1>All Orders</h1>
</div>

<div style="padding-top: 190px; padding-left: 240px;">
  <table>
  <tr>
    <th>Order ID</th>
    <th>Name</th>
    <th>Number of Bottles</th>
    <th>Cost</th>
    <th>Date</th>

  </tr>

<?php 

  while($rows = mysqli_fetch_array($sql)){?>

  <tr>
    <td><?php echo $rows["o_id"]; ?></td>
    <td><?php echo $rows["name"]; ?></td>
    <td><?php echo $rows["o_bottle"]; ?></td>
    <td><?php echo $rows["o_cost"]; ?></td>
    <td><?php echo $rows["date_of_order"]; ?></td>
  </tr>
  
<?php 
} 
?>

</table>
</div>


</body>
</html>