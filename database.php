<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $connection = new mysqli($servername, $username, $password);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    echo "Connected successfully";
?>