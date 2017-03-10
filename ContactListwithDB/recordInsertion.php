<?php
    include 'dbVariables.php';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port, $socket);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query
    $sql = "INSERT INTO dinesh (name,email,gender,address,city,phone) values ('" . $name . "','" . $email . "','" . $gender . "','" . $address . "','" . $city . "','" . $phone . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Inserted successfully";
        $nameErr = $emailErr = $genderErr = $addressErr = $cityErr = $phoneErr = "";
        $name = $email = $gender = $address = $city = $phone = "";
    } else {
        echo "Error : " . $conn->error;
    }

    $conn->close();
?>
