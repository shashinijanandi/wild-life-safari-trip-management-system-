<?php
include_once "database.php";     
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set user_id='" . $_POST['user_id'] . "', f_name='" . $_POST['f_name'] . "', l_name='" . $_POST['l_name'] . "', gender='" . $_POST['gender'] . "' ,dob='" . $_POST['dob'] . "' ,nationality='" . $_POST['nationality'] . "' ,address='" . $_POST['address'] . "' ,phone='" . $_POST['phone'] . "' ,country='" . $_POST['country'] . "' ,email='" . $_POST['email'] . "' ,password='" . $_POST['password'] . "' WHERE user_id='" . $_POST['user_id'] . "'");
echo "<script> alert('Updated Successfully') </script>";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE user_id='" . $_GET['user_id'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
    <div class="regbody">
<div class="regForm">
<form name="frmUser" method="post" action="">
<div>
</div>

<div>
<a href="users.php" class="btn-2">Back to User List</a>
</div>


<p>
			<label for="nic">NIC or Passport: </label>
			<input type="text" name="user_id" id="nic" class="regInput" value="<?php echo $row['user_id']; ?>" required>
		</p>

<p>
			<label for="firstName">First Name: </label>
			<input type="text" name="f_name" id="firstName" class="regInput" value="<?php echo $row['f_name']; ?>" required>
		</p>
		<p>
			<label for="lastName">Last Name: </label>
			<input type="text" name="l_name" id="lastName" class="regInput" value="<?php echo $row['l_name']; ?>" required>
		</p>
		<p>
			<label for="gender">Gender: </label>
			<input type="text" name="gender" id="gender" class="regInput" value="<?php echo $row['gender']; ?>" required>
			
		</p>
		<p>
			<label for="dob">Date of birth: </label>
			<input type="date" name="dob" id="dob" class="regInput" value="<?php echo $row['dob']; ?>" required>
		</p>
		
		<p>
			<label for="nationality">Nationality: </label>
			<input type="text" name="nationality" id="nationality" class="regInput" value="<?php echo $row['nationality']; ?>" required>
		</p>
		<p>
			<label for="address">Address: </label>
			<input type="text" name="address" id="address" class="regInput" value="<?php echo $row['address']; ?>" required>
		</p>
		<p>
			<label for="phone">Contact number: </label>
			<input type="tel" name="phone" id="phone" class="regInput" value="<?php echo $row['phone']; ?>" required>
		</p>
		<p>
			<label for="country">Country: </label>
			<input type="country" name="country" id="country" class="regInput" value="<?php echo $row['country']; ?>" required>
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="text" name="email" id="email" class="regInput" value="<?php echo $row['email']; ?>" required>
		</p>
		<p>
			<label for="password">Password: </label>
			<input type="password" name="password" id="password" class="regInput" value="<?php echo $row['password']; ?>" required>
		</p>
<input type="submit" name="submit" value="Submit" class="btn-2">

</form>
</div>
</div>
</body>
</html>