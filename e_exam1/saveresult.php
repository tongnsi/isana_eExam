<?php
require 'database.php';

$sql = "INSERT INTO test_results (user_id, test_type_id, test_date, passed, status) 
        VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iisis", 
    $_POST['user_id'], 
    $_POST['test_type_id'], 
    $_POST['test_date'], 
    $_POST['passed'], 
    $_POST['status']
);
$stmt->execute();

echo "เพิ่มผลสอบแล้ว <a href='index.php'>กลับหน้าแรก</a>";
?>
