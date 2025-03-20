<?php
require 'database.php';
$first = $_POST['first_name'];
$last = $_POST['last_name'];

$sql = "INSERT INTO users (first_name, last_name) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $first, $last);
$stmt->execute();

echo "เพิ่มผู้เข้าสอบแล้ว <a href='index.php'>กลับหน้าแรก</a>";
?>
