<?php

$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");
if($conn === false){
   die("ERROR: not connect. "
       . mysqli_connect_error());
}
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:admin_login.php');
}

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:admin_login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Admin</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <div class="admin-body">
        <div class="section-2">
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="#">
                            <img src="images/logowhite.png">
                        </a>
                    </li>
                    <li>
                        <a href="users.php">
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="packagelist.php">
                            <span>Packages</span>
                        </a>
                    </li>
                    <li>
                        <a href="reservationlist.php">
                            <span>Reservations</span>
                        </a>
                    </li>
                    <li>
                        <a href="contactlist.php">
                            <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_login.php?logout=<?php echo $user_id; ?>">
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<script src="assets/js/main.js"></script>    
</body>
</html>