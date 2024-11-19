<?php
		$conn = mysqli_connect("localhost", "root", "", "wildlife_safari");
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package List</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php include "admin.php"?>
<div class="section-3">
    <h1>All Packages</h1>

    <button class="button buttonAdd"><a href="packagecreate.php">Add Package</a></button>
    <br>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Package ID</th>
                <th>Package Title</th>
                <th>Package Type</th>
                <th>Package description</th>
                <th>Package price</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>

        <?php
        $sql = "SELECT * FROM package";
        $result = $conn->query($sql);

        echo "<tbody>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] .  "</td>";
                echo "<td>" . $row['type_'] . "</td>";
                echo "<td>" . $row['description_'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";

                echo "<td>";
                echo "<button class = 'button buttonEdit'><a href='packageupdate.php?id=$row[id]&title=$row[title]&type=$row[type_]&desc=$row[description_]&price=$row[price]'>Update</a></button>";
                echo "</td>";

                echo "<td>";
                echo "<button class = 'button buttonDel'><a id='delete' href='packagedelete.php?id=$row[id]'>Delete</a></button>";
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