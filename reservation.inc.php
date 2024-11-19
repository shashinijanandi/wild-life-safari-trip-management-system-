<?php

    include_once "dbh.inc.php";

    $Salutation = $_POST['Salutation'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['secondName'];
    $phone_no = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $package = $_POST['package'];
    $camera_option = $_POST['camera'];
    $date = $_POST['date'];
    $adults = $_POST['adults'];
    $child = $_POST['child'];


    $sql = "insert into reservations(Salutation , first_name , last_name ,  phone_no , email , country , package , camera_option , date , adults , child) values(?,?,?,?,?,?,?,?,?,?,?)";
    $statment = $connection->prepare($sql);

    $statment->bind_param("sssssssssss",$Salutation , $first_name , $last_name , $phone_no , $email , $country , $package , $camera_option , $date , $adults , $child);

    $statment->execute();


    