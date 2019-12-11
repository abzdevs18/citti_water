<?php

	session_start();

if (isset($_POST['submit'])) {

	include 'db.php';

	$admin_email = mysqli_real_escape_string($conn, $_POST['admin_email']);
	$admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);


	if (empty($admin_email) || empty($admin_password)) {
		header("Location: ../admin_form.php?login=empty");
		exit();

	} else{
		$sql = "SELECT * FROM admin_signup WHERE admin_email='$admin_email' OR admin_password='$admin_password'";
		$result = mysqli_query($conn, $sql);
		$checkresult = mysqli_num_rows($result);

		if($checkresult < 1) {
			header("Location: ../admin_form.php?login=error");
			exit();
		} else{
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedpasswordcheck = password_verify($admin_password, $row['admin_password']);
				if ($hashedpasswordcheck == false) {
					header("Location: ../admin_form.php?login=error");
					exit();
				} elseif ($hashedpasswordcheck == true) {

					$id = $row['admin_id'];
					$online = mysqli_query($conn, "UPDATE admin_signup SET admin_status=1 WHERE admin_id='$id'");
					if ($online) {
						
					$_SESSION['a_email'] = $row['admin_email'];		
					$_SESSION['a_id'] = $row['admin_id'];		
					$_SESSION['a_password'] = $row['admin_password'];
					header("Location: ../admin_interface.php");
					exit();
					}


				}
			}
		}
	}
}