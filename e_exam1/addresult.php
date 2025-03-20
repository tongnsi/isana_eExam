<?php require 'database.php'; ?>
<form method="POST" action="saveresult.php">
  <label>เลือกผู้เข้าสอบ:</label>
  <select name="user_id">
    <?php
    $users = $conn->query("SELECT * FROM users");
    while ($u = $users->fetch_assoc()) {
      echo "<option value='{$u['id']}'>{$u['first_name']} {$u['last_name']}</option>";
    }
    ?>
  </select><br>

  <label>ประเภทการสอบ:</label>
  <select name="test_type_id">
    <?php
    $types = $conn->query("SELECT * FROM test_types");
    while ($t = $types->fetch_assoc()) {
      echo "<option value='{$t['id']}'>{$t['name']}</option>";
    }
    ?>
  </select><br>

  <label>วันที่สอบ:</label>
  <input type="date" name="test_date"><br>

  <label>ผลสอบ:</label>
  <select name="passed">
    <option value="1">ผ่าน</option>
    <option value="0">ไม่ผ่าน</option>
  </select><br>

  <label>สถานะ:</label>
  <input type="text" name="status" value="รอตรวจสอบ"><br>

  <button type="submit">บันทึกผลสอบ</button>
</form>
