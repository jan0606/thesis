<?php
	session_start();
	$email = $_POST['username'];
	$pass = $_POST['password'];
	if(ISSET($_POST['login'])){
		$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
		$query = $conn->query("SELECT *FROM `itr` WHERE `email` = '$email' && `pass` = '$pass'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$valid = $query->num_rows;
			if($valid > 0){
				$_SESSION['admin_id'] = $fetch['admin_id'];
				header("location:covid_record.php");
			}else{
				echo "<script>alert('Invalid username or password')</script>";
				echo "<script>window.location = 'index.php'</script>";
			}
		$conn->close();
	}	