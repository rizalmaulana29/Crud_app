<?php
include 'config.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$rows = array();
while($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

echo json_encode($rows);

$conn->close();
?>
