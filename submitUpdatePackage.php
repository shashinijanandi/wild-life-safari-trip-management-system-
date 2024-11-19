<?php
include_once "database.php";
if ($_GET['submit']) {
    $id = $_GET['packID'];
    $title = $_GET['title'];
    $type = $_GET['type'];
    $description = $_GET['packageDesc'];
    $price = $_GET['price'];

    $query = "UPDATE package SET
                        title = '$title',
                        type_= '$type',
                        description_ = '$description',
                        price = '$price'
                        WHERE id = '$id'";
                        
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Record Updated')</script>";
        header("location:packagelist.php");
    } else {
        echo "<script>alert('Error in Update')</script>";
    }
}

mysqli_close($conn);

?>
