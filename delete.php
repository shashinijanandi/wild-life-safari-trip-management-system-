<?php
include_once "database.php";
$sql = "DELETE FROM users WHERE user_id='" . $_GET["user_id"] . "'";
if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location: users.php");
            exit;
?>