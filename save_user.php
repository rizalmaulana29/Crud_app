<?php
include 'config.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO users (firstname, lastname, phone, email) VALUES ('$firstname', '$lastname', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("errorMsg" => "Error: " . $conn->error));
}

$conn->close();
?>
