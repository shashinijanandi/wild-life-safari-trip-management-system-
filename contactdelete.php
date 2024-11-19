<?php
$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");
$sql = "DELETE FROM contact_us WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location: contactlist.php");
            exit;
?>