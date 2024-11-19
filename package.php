<!DOCTYPE html>
<html>
<head>
    <title>pakege</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card {
            border: 3px solid #000;
            border-radius: 20px;
            padding: 10px;
            margin: 30px;
            width: 300px;
            float: left;
        }




        @keyframes noise-before {
        0% {
            clip: rect(61px, 9999px, 52px, 0);
        }
        5% {
            clip: rect(33px, 9999px, 144px, 0);
        }
        10% {
            clip: rect(121px, 9999px, 115px, 0);
        }
        15% {
            clip: rect(144px, 9999px, 162px, 0);
        }
        20% {
            clip: rect(62px, 9999px, 180px, 0);
        }
        25% {
            clip: rect(34px, 9999px, 42px, 0);
        }
        30% {
            clip: rect(147px, 9999px, 179px, 0);
        }
        35% {
            clip: rect(99px, 9999px, 63px, 0);
        }
        40% {
            clip: rect(188px, 9999px, 122px, 0);
        }
        45% {
            clip: rect(154px, 9999px, 14px, 0);
        }
        50% {
            clip: rect(63px, 9999px, 37px, 0);
        }
        55% {
            clip: rect(161px, 9999px, 147px, 0);
        }
        60% {
            clip: rect(109px, 9999px, 175px, 0);
        }
        65% {
            clip: rect(157px, 9999px, 88px, 0);
        }
        70% {
            clip: rect(173px, 9999px, 131px, 0);
        }
        75% {
            clip: rect(62px, 9999px, 70px, 0);
        }
        80% {
            clip: rect(24px, 9999px, 153px, 0);
        }
        85% {
            clip: rect(138px, 9999px, 40px, 0);
        }
        90% {
            clip: rect(79px, 9999px, 136px, 0);
        }
        95% {
            clip: rect(25px, 9999px, 34px, 0);
        }
        100% {
            clip: rect(173px, 9999px, 166px, 0);
        }
        }

        @keyframes noise-after {
        0% {
            clip: rect(26px, 9999px, 33px, 0);
        }
        5% {
            clip: rect(140px, 9999px, 198px, 0);
        }
        10% {
            clip: rect(184px, 9999px, 89px, 0);
        }
        15% {
            clip: rect(121px, 9999px, 6px, 0);
        }
        20% {
            clip: rect(181px, 9999px, 99px, 0);
        }
        25% {
            clip: rect(154px, 9999px, 133px, 0);
        }
        30% {
            clip: rect(134px, 9999px, 169px, 0);
        }
        35% {
            clip: rect(26px, 9999px, 187px, 0);
        }
        40% {
            clip: rect(147px, 9999px, 137px, 0);
        }
        45% {
            clip: rect(31px, 9999px, 52px, 0);
        }
        50% {
            clip: rect(191px, 9999px, 109px, 0);
        }
        55% {
            clip: rect(74px, 9999px, 54px, 0);
        }
        60% {
            clip: rect(145px, 9999px, 75px, 0);
        }
        65% {
            clip: rect(153px, 9999px, 198px, 0);
        }
        70% {
            clip: rect(99px, 9999px, 136px, 0);
        }
        75% {
            clip: rect(118px, 9999px, 192px, 0);
        }
        80% {
            clip: rect(1px, 9999px, 83px, 0);
        }
        85% {
            clip: rect(145px, 9999px, 98px, 0);
        }
        90% {
            clip: rect(121px, 9999px, 154px, 0);
        }
        95% {
            clip: rect(156px, 9999px, 44px, 0);
        }
        100% {
            clip: rect(67px, 9999px, 122px, 0);
        }
        

            /*background-color: #fff;*/
        }

        .card h2 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #000; /* Change font color here */
        }

        .card p {
            margin: 0;
            color: #000; /* Change font color here */
        }

        .card textarea {
            background-color: #000
            border: none;
            outline: none;
            width: 100%;
            height: 80px;
            padding: 5px;
            margin-bottom: 10px;
            box-shadow: 0 0 5px #000  
            filter: blur(16px); /* Apply the blur effect */
        }
    </style>
</head>
<body>
<?php include "inc/header.php"?>

   <h2>All Packages</h2>
        <button class="btn-2" ><a href="reservation.php">For make reservation</a></button>

    <?php
    // Assuming you have established a database connection
    include_once "database.php";

    // Fetch data from the database
    $sql = "SELECT * FROM package";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in card format
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<h2>' . $row['title'] . '</h2>';
            echo '<p>Type: ' . $row['type_'] . '</p>';
            echo '<p>Description:</p>';
            echo '<p>' . $row['description_'] . '</p>';
            echo '<p>Price: ' . $row['price'] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No data available.</p>';
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
