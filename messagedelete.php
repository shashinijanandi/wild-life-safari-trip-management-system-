<?php include_once 'database.php';
if(isset($_GET['deleteid']))
    $name=$_GET['deleteid'];

    $sql="delete from 'crud' where id=$name";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfully";
        header('location: display.php');
    }else
        die(mysqli_error($con));
    ?>