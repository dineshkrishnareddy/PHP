<?php

include 'initialization.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];


    if (empty($name)) {
        $nameErr = "Name is required";
    } else {
        $name = validateData($name);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($email)) {
        $emailErr = "Email is required";
    } else {
        $email = validateData($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($address)) {
        $addressErr = "Address is required";
    } else {
        $address = validateData($address);
    }

    if (empty($city)) {
        $cityErr = "city is required";
    } else {
        $city = validateData($city);
    }

    if (empty($phone)) {
        $phoneErr = "phone number is required";
    } else {
        $phone = validateData($phone);
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Only numbers allowed and 10 digit number format allowed";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = validateData($_POST["gender"]);
    }

    if ($nameErr !== "" || $emailErr !== "" || $genderErr !== "" || $addressErr !== "" || $cityErr !== "" || $phoneErr !== "") {
        echo "Please enter all required values";
    } else {

        include 'recordInsertion.php';
    }
}

function validateData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
