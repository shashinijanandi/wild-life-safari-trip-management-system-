<?php

$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");
if($conn === false){
   die("ERROR: not connect. "
       . mysqli_connect_error());
}
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>My Profile</title>
   <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
   <div class="section">
      <h2>Welcome to Wildlife safari SL</h2>
      <h2>Thankyou for join with us</h2>
      <br><br><br><br><br>
      <center>
            <a class="btn" href="index.php">Home</a>
            <a class="btn" href="package.php">View packages</a>
            <a class="btn" href="myprofile.php?logout=<?php echo $user_id; ?>">Logout</a>
      <center>
   </div>
<br><br><br><br><br>
<?php include "inc/footer.php";?>
</body>
</html>