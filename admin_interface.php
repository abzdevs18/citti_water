  <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin_interface.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="script/Chart.min.js"></script>
    <script src="script/jquery.min.js"></script>
</head>
</head>
<body>

<nav>
	<div class="citi">
    <h3>Purify your water. Purify your life.</h3>
	</div>
</nav>

<div class="nav3">
<ul>
  <li style="margin-left: 180px;"><a class="active" href="admin_interface.php">Home</a></li>
  <li style="margin-right: 40px; float: right;"><a class="active" href="included/logout_included.php">Logout</a></li>
</ul>
</div>

<div class="nav2">
<ul>
  <li><img src="images/citi.png" alt="citi logo" width="185" height="115"></li>
  <li><a style="color: blue;" href="admin_interface.php">Dashboard</a></li>
  <li><a href="admin_interface_delivery.php">Delivered</a></li>
  <li><a href="admin_interface_charts.php">Charts</a></li>
  <li><a href="admin_interface_removed.php">Removed</a></li>
  <li><a href="admin_interface_allorders.php">All Orders</a></li>
</ul>
</div>

<div style="margin:200px; margin-top: 140px; position: absolute;">
  <a href="dashboard/new orders.php"><img src="images/new orders.jpg" width="250" height="150"></a>
</div>

<div style="margin:490px; margin-top: 140px; position: absolute;">
  <a href="dashboard/confirmed orders.php"><img src="images/confirmed.jpg" width="250" height="150"></a>
</div>

<div style="margin:780px; margin-top: 140px; position: absolute;">
  <a href="dashboard/pending orders.php"><img src="images/pending.jpg" width="250" height="150"></a>
</div>

<div style="margin:1070px; margin-top: 140px; position: absolute;">
  <a href="dashboard/declined orders.php"><img src="images/declined.jpg" width="250" height="150"></a>
</div>



<div style="margin:245px; margin-top: 340px; position: absolute; font-weight: bold;">
  <span>Sales Overview</span>
</div>

<div style="margin:240px; margin-top: 390px; position: absolute;">
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

<div style="margin:810px; margin-top: 340px; position: absolute; font-weight: bold;">
  <span>Customers</span>
</div>

<div style="margin:800px; margin-top: 390px; position: absolute;">
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

<!-- 
<div style="margin:200px; margin-top: 350px; position: absolute;">
  <a href="dashboard/sales.php"><img src="images/sales.jpg" width="250" height="150"></a>
</div>

<div style="margin:490px; margin-top: 350px; position: absolute;">
  <a href="dashboard/ratings.php"><img src="images/rating.jpg" width="250" height="150"></a>
</div>

<div style="margin:780px; margin-top: 350px; position: absolute;">
  <a href="dashboard/calendar.php"><img src="images/calendar.jpg" width="250" height="150"></a>
</div>

<div style="margin:1070px; margin-top: 350px; position: absolute;">
  <a href="dashboard/notification.php"><img src="images/notification.jpg" width="250" height="150"></a>
</div> -->

<!-- 
  <div class="main-container" style="margin:200px; margin-top: 160px; position: absolute;">
    <div class="main">
      
      <div class="query-container" style="background-color: #42CB6F; ;">
        <div class="query-icon"><i class="fas fa-users"></i> </div>
        <div class="query-name"><div class="query-count"> <?php echo $CountNotPending;?> </div><a href="patients.php" style="text-decoration: none; color: white;">Patients</a></div>
      </div>
      <div class="query-container" style="background-color: #ED5564;">
        <div class="query-icon"><i class="fas fa-clock"></i> </div>
        <div class="query-name"> <div class="query-count"> <?php echo $CountPending;?> </div><a href="pending-patient.php" style="text-decoration: none; color: white;">Pending Patients</a></div>
      </div>
      <div class="query-container" style="background-color: #F57C4F;">
        <div class="query-icon"><i class="fas fa-folder-open"></i> </div>
        <div class="query-name"> <div class="query-count"> <?php echo $CountPatientRecord;?> </div> Patients Record</div>
      </div>
      <div class="query-container" style="background-color: #4EC2E7;">
        <div class="query-icon"><i class="fas fa-folder-open"></i> </div>
        <div class="query-name"><div class="query-count"> <?php echo $CountPatientWithRecord?> </div>Patients with Record</div>
      </div>
    </div>
  </div>
 -->

</body>
</html>