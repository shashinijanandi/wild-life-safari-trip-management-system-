<?php
$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");

if(!$conn){
    die('Could not Connect My Sql:' .mysqli_error());
   }
?>