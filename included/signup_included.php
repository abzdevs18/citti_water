<?php
	include('db.php');
	session_start();

if (isset($_POST['submit'])) {

	$admin_name = mysqli_real_escape_string($conn, $_POST['admin_name']);
	$admin_email = mysqli_real_escape_string($conn, $_POST['admin_email']);
	$admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);

	if (empty($admin_name) || empty($admin_email) || empty($admin_password)) {
		header("Location: ../signup_form.php?signup=empty");
		exit();
	
} else{

			if (!filter_var($admin_email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup_form.php?signup=email");
				exit();
			} else{

				$sql = "SELECT * FROM admin_signup WHERE admin_email='$admin_email'";
				$result = mysqli_query($conn, $sql);
				$checkresult = mysqli_num_rows($result);

				if ($checkresult > 0) {
					header("Location: ../signup_form.php?signup=usertaken");
					exit();
				} else{
					$hashedpassword = password_hash($admin_password, PASSWORD_DEFAULT);
					$sql = "INSERT INTO admin_signup (`admin_name`, `admin_email`, `admin_password`, `admin_status`) VALUES ('$admin_name', '$admin_email', '$hashedpassword',1);";
					$query = mysqli_query($conn, $sql);
					if ($query) {
						$sql = "SELECT * FROM admin_signup WHERE admin_email='$admin_email'";
						$result = mysqli_query($conn, $sql);						
						if ($row = mysqli_fetch_assoc($result)) {
							$_SESSION['a_email'] = $row['admin_email'];	
							$_SESSION['a_id'] = $row['admin_id'];	

							header("Location: ../admin_interface.php"); 
							exit();
								}
							
						}
						
					
			}
		}
	}

}
 ?>