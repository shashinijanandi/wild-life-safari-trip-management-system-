<?php
include_once 'database.php';?>

<Doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IF=edge">
  <meta name="viewport" content="width=device-width, 
   initial-scale=1.0">
   <title>Crud operation</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" >
</head>
<body>
  <?php include "header.php"?>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php"
    class="text-light">Add user</a></button>
    <table class="table table-dark">
   <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">Country</th>
      <th scope="col">Comments</th>
      <th scope="col">operation</th>
    </tr>
   </thead>
   <tbody>
    <?php
    $sql="select * from  'crud'";
    $result=mysqli_query($con,$sql);
    if($result){
      while ($row=mysqli_fetch_assoc($result)){
      $name=$row['fullname'];
      $phonenumber=$row['phone'];
      $email=$row['email'];
      $country=$row['country'];
      $comments=$row['comments'];
      echo '<tr>
      <th scope="row">'.$name.'</th>
      <td>'.$phonenumber.'</td>
      <td>'.$email.'</td>
      <td>'.$country.'</td>
      <td>'.$comments.'</td>
      <td>
        <button class="btn btn-primary"><a href="update.php?
        delete.id='.$name.'" class="text-light">Update</a></button>
        <button class="btn btn-primary"><a href="delete.php? delete.id='.$name.'"
        class="text-light">Delete</a></button>
      </td>
      </tr>';
    }
    }
    ?>
    
    </tbody>
    </table>
    </div>
    <?php include "header.php"?>
</body>
</html>
