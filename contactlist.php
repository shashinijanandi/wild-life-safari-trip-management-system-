<?php
		$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">

<head>
    <title>Messages List</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php include "admin.php"?>
<div class="section-3">
    <h1>Messages</h1>

    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Message</th>
                <th>Subject</th>
                <th>Comment</th>

                <th>Delete</th>
            </tr>
        </thead>

        <?php
        $sql = "SELECT * FROM contact_us";
        $result = $conn->query($sql);

        echo "<tbody>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['subject'] .  "</td>";
                echo "<td>" . $row['comment'] . "</td>";

                echo "<td>";
                echo "<a id='delete' href='contactdelete.php?id=$row[id]'>Delete</a>";
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