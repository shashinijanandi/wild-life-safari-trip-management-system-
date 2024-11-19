<?php

include_once "database.php";
session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $password = $_POST['password'];

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['user_id'];
      header('location:admin.php');
   }
   else{
      $message[] = 'Incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Login</title>
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<?php include "inc/header.php"?>
   <div class="logbody">
      <div class="logForm">
         <form action="" method="post">
            <center><img src="images/elephant.jpg" alt="Elephant" class="log-img"></center>
               <h2>Hi Admin, welcome</h2>

               <?php
                  if(isset($message)){
                     foreach($message as $message){
                        echo "<script> alert('$message') </script>";
                     }
                  }
               ?>

               <p>
                  <input type="email" name="email" placeholder="Enter your email" class="logInput" required>
               </p>
               <p>
                  <input type="password" name="password" placeholder="Enter your password" class="logInput" required>
               </p>
                  <input type="submit" name="submit" value="Login now" class="btn-2">
         </form>
      </div>
   </div>
<?php include "inc/footer.php"?>

</body>
</html>