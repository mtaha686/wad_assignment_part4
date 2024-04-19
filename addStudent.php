<?php

include_once "dbConnect.php";

// define variables and set to empty values
$name = $contact = $address =  $registration = $department = "";

$editID = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $registration = $_POST["registration"];
    $department = $_POST["department"];

    $my_query = "INSERT INTO students (name, contact, address, registration, department) 
                 VALUES ('$name', '$contact', '$address', '$registration', '$department')";

    $result = mysqli_query($con, $my_query);

    if ($result) {
        $message = "Success";
        header("Location: view.php?message=" . $message);
        exit(); // Stop further execution after redirection
    } else {
        $message = "Unsuccess";
        header("Location: view.php?message=" . $message);
        exit(); // Stop further execution after redirection
    }
} else {
    echo "Error: Invalid request method";
}

?>
