<?php

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "wildlife_safari";

    $connection = new mysqli($server_name , $user_name , $password , $database);

    if ($connection->connect_error) {
        die("Connection failed: ");
    }else {
        echo "Connection successful";
    };