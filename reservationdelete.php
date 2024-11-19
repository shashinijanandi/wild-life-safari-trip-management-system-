<?php
$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");
$sql = "DELETE FROM reservations WHERE res_id='" . $_GET["res_id"] . "'";
if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location: reservationlist.php");
            exit;
?>