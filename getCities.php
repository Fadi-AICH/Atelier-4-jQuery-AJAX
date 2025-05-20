<?php
$conn = new PDO("mysql:host=localhost;dbname=localisation", "root", "");
$state_id = $_GET['state_id'];
$stmt = $conn->prepare("SELECT * FROM cities WHERE state_id = ?");
$stmt->execute([$state_id]);
while ($row = $stmt->fetch()) {
  echo "<option value='{$row['id']}'>{$row['name']}</option>";
}
?>
