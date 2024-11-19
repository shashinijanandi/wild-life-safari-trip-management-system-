<?php
    include_once "database.php";

    $id = $_GET['id'];

    $query = "DELETE FROM package WHERE id = '$id'";

    $data = mysqli_query($conn, $query);
    
    if ($data) {
        echo "<script>alert('Record Deleted')</script>";
        header("location:packagelist.php");
    }else{
        echo "<script>alert('Error in Delete')</script>";
    }
?>