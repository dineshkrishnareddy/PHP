<?php

include 'dbVariables.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port, $socket);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dinesh";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Gender</th><th>Address</th><th>City</th><th>Phone</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td class='tableColumn'>" . $row["id"]. "</td>
        <td class='tableColumn'>" . $row["name"]. "</td>
        <td class='tableColumn'>" . $row["email"]. "</td>
        <td class='tableColumn'>" . $row["gender"]. "</td>
        <td class='tableColumn'>" . $row["address"]. "</td>
        <td class='tableColumn'>" . $row["city"]. "</td>
        <td class='tableColumn'>" . $row["phone"]. "</td></tr>";
    }
    echo "</table>";

} else {
    echo "0 results";
}
