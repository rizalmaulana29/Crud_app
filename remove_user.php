<?php
include 'config.php';

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("errorMsg" => "Error: " . $conn->error));
}

$conn->close();
?>
