<?php
require 'database.php';

$sql = "SELECT u.first_name, u.last_name, t.name AS test_name, r.test_date, r.passed, r.status
        FROM test_results r
        JOIN users u ON r.user_id = u.id
        JOIN test_types t ON r.test_type_id = t.id
        ORDER BY r.test_date DESC";

$result = $conn->query($sql);
?>

<h3>ผลสอบทั้งหมด</h3>
<table border="1">
  <tr>
    <th>ชื่อ</th><th>ประเภทการสอบ</th><th>วันที่สอบ</th><th>ผ่าน/ไม่ผ่าน</th><th>สถานะ</th>
  </tr>
  <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
      <td><?= $row['test_name'] ?></td>
      <td><?= $row['test_date'] ?></td>
      <td><?= $row['passed'] ? "ผ่าน" : "ไม่ผ่าน" ?></td>
      <td><?= $row['status'] ?></td>
    </tr>
  <?php } ?>
</table>
<a href="home.php">กลับหน้าแรก</a>
