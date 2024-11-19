<?php

include_once "database.php";
?>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<?php

    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comment = $_POST["comment"];


    $sql = "INSERT INTO contact_us (email,subject,comment) VALUES ('$email', '$subject', '$comment')";

    if (mysqli_query($conn, $sql))  {
        echo "<script>alert('Message sent Successfully')</script>";
        header("location:contact_us.php");
    } else {
        echo "<script>alert('Error in Update')</script>";
    }

mysqli_close($conn);

?>

