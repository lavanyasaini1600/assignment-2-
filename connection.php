<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="personsdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        "Not Connected";
    }
    echo "Connected successfully";
?>


