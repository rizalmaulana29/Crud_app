<?php
include 'config.php';

$id = $_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', phone='$phone', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("errorMsg" => "Error: " . $conn->error));
}

$conn->close();
?>
