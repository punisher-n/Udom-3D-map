<?php 
	function login(){
		session_start();
		require 'connect.php';

		if (isset($_POST['btn-login'])) {
			$email = mysqli_escape_string($con,$_POST['email']);
			$pass = md5(mysqli_escape_string($con, $_POST['password']));

			//hapa tunacheck kama user anaexist kwenye database

			$select_user = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
			$exc = mysqli_query($con, $select_user);
			if ($exc == FALSE) {
				echo mysqli_error($con);
			}
			if (mysqli_num_rows($exc)>0) {
				$_SESSION['email']= $email;
				// echo "<script>alert('done')</script>";
				header("location:admin/index.php");
			}else{
				echo '<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Error</strong> While tyring login
				</div>';
			}
		}
	}


		function addUser(){
		require 'connect.php';

		if (isset($_POST['btn-add'])) {
			$fname = mysqli_escape_string($con,$_POST['fname']);
			$lname = mysqli_escape_string($con,$_POST['lname']);
			$email = mysqli_escape_string($con,$_POST['email']);
			$pass = md5(mysqli_escape_string($con, $_POST['password']));

			//hapa tunacheck kama user anaexist kwenye database

			$select_user = "SELECT * FROM user WHERE email='$email'";
			$exc = mysqli_query($con, $select_user);
			if ($exc == FALSE) {
				echo mysqli_error($con);
			}
			if (mysqli_num_rows($exc)>0) {
				echo '<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>User</strong> Allready Exist
				</div>';
				
			}else{
				//hapa tunaingiza kwenye db

				$insert_user = mysqli_query($con, "INSERT INTO user (fname,lname,email,password)VALUES('$fname','$lname','$email','$pass')");
				if ($insert_user==FALSE) {
					echo mysqli_error($con);
				}else{
					echo '<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Successfully</strong> User inserted
					</div>';
				}
			}
		}
	}



		function addplace(){
		require 'connect.php';
		$email = $_SESSION['email'];

			$select_users = "SELECT * FROM user WHERE email='$email'";
			$exc = mysqli_query($con, $select_users);
			$row = mysqli_fetch_array($exc);
			$admin = $row['user_id'];
			if (isset($_POST['btn-add'])) {
			$place = mysqli_escape_string($con,$_POST['place_name']);

			//hapa tunacheck kama place anaexist kwenye database

			$select_user = "SELECT * FROM places WHERE place_name='$place'";
			$exc = mysqli_query($con, $select_user);
			if ($exc == FALSE) {
				echo mysqli_error($con);
			}
			if (mysqli_num_rows($exc)>0) {
				echo '<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Place</strong> Allready Exist
				</div>';
				
			}else{
				//hapa tunaingiza kwenye db

				$insert_place = mysqli_query($con, "INSERT INTO places (place_name,who_add)VALUES('$place','$admin')");
				if ($insert_place==FALSE) {
					echo mysqli_error($con);
				}else{
					echo '<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Successfully</strong> Place inserted
					</div>';
				}
			}
		}
	}
 ?>