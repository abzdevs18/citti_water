<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin_interface.css">
  <script src="script/Chart.min.js"></script>
  <script src="script/jquery.min.js"></script>
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
  <li><a style="color: blue;"href="admin_interface_charts.php">Charts</a></li>
  <li><a href="admin_interface_removed.php">Removed</a></li>
  <li><a href="admin_interface_allorders.php">All Orders</a></li>
</ul>
</div>



<div style="margin:245px; margin-top: 160px; position: absolute; font-weight: bold;">
  <span>Sales Overview</span>
</div>

<div style="margin:240px; margin-top: 200px; position: absolute;">
  <canvas id="myChart" width="500" height="300"></canvas>
</div>

<script>
var ctx = document.getElementById("myChart");
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [{
            label: 'Number of Sales',
            data: [200, 500, 300, 101, 200, 400],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

<div style="margin:810px; margin-top: 160px; position: absolute; font-weight: bold;">
  <span>Customers</span>
</div>

<div style="margin:800px; margin-top: 230px; position: absolute;">
  <canvas id="myDoughnutChart" width="450" height="250"></canvas>
</div>

<script>
var ctx = document.getElementById("myDoughnutChart");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
        'Declined',
        'Confirmed',
        'Pending'],
        datasets: [{
            data: [100, 300, 200],
            backgroundColor: [
                'rgb(255,0,0)',
                'rgb(255,0,255)',
                'rgb(255,255,0)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255,99,132,1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

</body>
</html>