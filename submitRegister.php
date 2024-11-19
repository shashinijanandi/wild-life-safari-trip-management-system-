<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<?php
		
		include_once "database.php";
		
		$user_id = $_REQUEST['user_id'];
		$f_name = $_REQUEST['f_name'];
		$l_name = $_REQUEST['l_name'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$nationality = $_REQUEST['nationality'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$country = $_REQUEST['country'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		

		$select = mysqli_query($conn, "SELECT `email` FROM `users` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
		if(mysqli_num_rows($select)) {
			echo "<script> alert('This Email is already being used') </script>";
			header("location: register.php");
            exit;
		}
		
		$select = mysqli_query($conn, "SELECT `phone` FROM `users` WHERE `phone` = '".$_POST['phone']."'") or exit(mysqli_error($conn));
		if(mysqli_num_rows($select)) {
			echo "<script> alert('This phone number is already being used') </script>";
			header("location: register.php");
            exit;
		}

		$select = mysqli_query($conn, "SELECT `user_id` FROM `users` WHERE `user_id` = '".$_POST['user_id']."'") or exit(mysqli_error($conn));
		if(mysqli_num_rows($select)) {
			echo "<script> alert('This NIC number is already being used') </script>";
			header("location: register.php");
            exit;
		}
		

		if ($_POST["password"] === $_POST["c_password"]) {
			echo "<script> alert('Successfully Registered') </script>";
			$sql = "INSERT INTO users VALUES ('$user_id','$f_name','$l_name','$gender','$dob','$nationality','$address','$phone','$country','$email','$password')";
		

		 }
		 else {
			echo "<script> alert('You entered password is not matched') </script>";
			header("location: register.php");
            exit;
		 }
			
	
		if(mysqli_query($conn, $sql)){
			
		} else{
			echo "ERROR: Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		header("location: myprofile.php");
            exit;


		?>
</body>
</html>
