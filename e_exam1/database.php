<?php
$host = 'localhost';
$user = 'root';
$pass = 'root'; // สำหรับ MAMP
$database = 'driving_test';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
