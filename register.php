<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<?php include "inc/header.php"?>

<div class="regbody">
<div class="regForm">
	<form action="submitRegister.php" method="POST">
		<h1>Register</h1>
		<p>
			<label for="firstName">First Name: </label>
			<input type="text" name="f_name" id="firstName" class="regInput" required>
		</p>
		<p>
			<label for="lastName">Last Name: </label>
			<input type="text" name="l_name" id="lastName" class="regInput" required>
		</p>
		<p>
			<label>Gender: </label>
			<label for="male">Male </label>
			<input type="radio" name="gender" id="male" value="Male">
			<label for="female">Female </label>
			<input type="radio" name="gender" id="female" value="Female">
		</p>
		<p>
			<label for="dob">Date of birth: </label>
			<input type="date" name="dob" id="dob" class="regInput" required>
		</p>
		<p>
			<label for="nic">NIC or Passport: </label>
			<input type="text" name="user_id" id="nic" class="regInput" required>
		</p>
		<p>
			<label for="nationality">Nationality: </label>
			<input type="text" name="nationality" id="nationality" class="regInput" required>
		</p>
		<p>
			<label for="address">Address: </label>
			<input type="text" name="address" id="address" class="regInput" required>
		</p>
		<p>
			<label for="phone">Contact number: </label>
			<input type="tel" name="phone" id="phone" class="regInput" required>
		</p>
		<p>
			<label for="country">Country: </label>
			<input type="country" name="country" id="country" class="regInput" required>
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="text" name="email" id="email" class="regInput" required>
		</p>
		<p>
			<label for="password">Password: </label>
			<input type="password" name="password" id="password" class="regInput" required>
		</p>
		<p>
			<label for="cpassword">Re-enter password: </label>
			<input type="password" name="c_password" id="cpassword" class="regInput" required>
		</p>

			<input type="submit" value="Submit" class="btn-2">	
		<p class="linktexts"><a href="login.php">Already have an account</a></p>
		</form>
		</div>
</div>

<?php include"inc/footer.php"?>
</body>
</html>


