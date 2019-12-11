<!DOCTYPE html>
<html>
<head>
  <title>citi water</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="signup_form.css">
</head>
<body>

<nav>
  <div class="citi">
  </div>
</nav>

<section>
	<div class="citiwater">
		<h1>Sign Up</h1>
	</div>

</section>

	<form method="POST" action="included/signup_included.php">
		<div class="admin_name">
			<input style="width:257px;" type="text" name="admin_name" placeholder="Admin Name" autofocus>
		</div>

    <div class="admin_email">
      <input style="width:257px;" type="text" name="admin_email" placeholder="Email Account" autofocus>
    </div>

		<div class="admin_password">
			<input style="width:257px;" type="password" name="admin_password" placeholder="Admin Password" autofocus>
		</div>
		
		<div class="submit">
			<button type="submit" name="submit">Continue</button>
		</div>
	</form>

<?php

	include_once 'foot.php';
?>
