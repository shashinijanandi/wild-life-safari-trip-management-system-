<?php

include_once "database.php";
?>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<?php

//$itemID = $_POST["itemID"];
$packageTitle = $_POST["title"];
    $packageType = $_POST["type"];
    $packageDescription = $_POST["packagedescription"];
    $packagePrice = $_POST["price"];


    $sql = "INSERT INTO package (title,type_,description_,price) VALUES ('$packageTitle', '$packageType', '$packageDescription', '$packagePrice')";

    if (mysqli_query($conn, $sql))  {
        echo "<script>alert('Record Inserted Successfully!!')</script>";
        header("location:packagecreate.php");
    } else {
        echo "<script>alert('Error in Update')</script>";
    }

mysqli_close($conn);

?>

