<?php
include_once "database.php";
$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/style.css">
<title>Users List</title>
</head>
<body>
<?php include "admin.php"?>
<div class="section-3">
	<h1>User List</h1>
	<table class="styled-table">
			<thead>
				<tr>
				<th>NIC</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Nationality</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>Country</th>
				<th>Email</th>
				
				<th>Delete</th>
				<th>Edit</th>
				</tr>
			</thead>
		<?php
		$i=0;
		while($row = mysqli_fetch_array($result)) {
		?>
		
		<td><?php echo $row["user_id"]; ?></td>
		<td><?php echo $row["f_name"]; ?></td>
		<td><?php echo $row["l_name"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["dob"]; ?></td>
		<td><?php echo $row["nationality"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["country"]; ?></td>
		<td><?php echo $row["email"]; ?></td>


		<td><button><a href="delete.php?user_id=<?php echo $row["user_id"]; ?>" onclick="return confirm('Are you sure ?')">Delete</a></button></td>
		
		<td><button><a href="update.php?user_id=<?php echo $row["user_id"]; ?>">Update</a></button></td>
		</tr>
		<?php
		$i++;
		}
		?>
	</table>
</div>
</body>
</html>