<?php
    include 'dbVariables.php';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port, $socket);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE TABLE dinesh (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL,
                                 email VARCHAR(50) NOT NULL,gender VARCHAR(5) NOT NULL,address VARCHAR(50) NOT NULL,
                                 city VARCHAR(15) NOT NULL,phone VARCHAR(10) NOT NULL)";
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
?>