<?php
		$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">

<head>
    <title>Reservation List</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php include "admin.php"?>
<div class="section-3">
    <h1>Reservations</h1>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Reservation ID</th>
                <th>Salutation</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>phone_no</th>
                <th>email</th>
                <th>country</th>
                <th>Package</th>
                <th>camera Option</th>
                <th>Reservation Date</th>
                <th>Adults</th>
                <th>Child</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>

        <?php
        $sql = "SELECT * FROM reservations";
        $result = $conn->query($sql);

        echo "<tbody>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               
                echo "<tr>";
                echo "<td>" . $row['res_id'] . "</td>";
                echo "<td>" . $row['salutation'] .  "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['phone_no'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['country'] . "</td>";
                echo "<td>" . $row['package'] . "</td>";
                echo "<td>" . $row['camera_option'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['adults'] . "</td>";
                echo "<td>" . $row['child'] . "</td>";

                echo "<td>";
                echo "<a href='reservationupdate.php'>Update</a>";
                echo "</td>";

                echo "<td>";
                echo "<a id='delete' href='reservationdelete.php?res_id=$row[res_id]'>Delete</a>";
                echo "</td>";

                echo "</tr>";
            }
            echo "</tbody>";
        } else {
            echo "<center>Table is empty!</center>";
        }

        mysqli_close($conn);
        ?>

    </table>
    </div>
</body>

</html>