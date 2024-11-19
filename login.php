<?php

$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");
session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $password = $_POST['password'];

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['user_id'];
      header('location:myprofile.php');
   }
   else{
      $message[] = 'Incorrect Email or Password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

   <title>Login</title>
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include "inc/header.php"?>
   <div class="logbody">
      <div class="logForm">
      
         <form action="" method="post">
            <h2>Login now</h2>
               <?php
               if(isset($message)){
                  foreach($message as $message){
                  
                     echo "<script> alert('$message') </script>";
                  }
               }
               ?>

               <input type="email" name="email" placeholder="Enter your email" class="logInput" required>
               <input type="password" name="password" placeholder="Enter your password" class="logInput" equired>
               <input type="submit" name="submit" value="Login Now" class="btn-2">
               <p class="linktexts"><a href="register.php">Don't have an account</a></p>
         </form>      
      </div>
   </div>


<?php include"inc/footer.php"?>
</body>
</html>