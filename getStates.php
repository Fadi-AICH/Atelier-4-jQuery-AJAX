<?php
$conn = new PDO("mysql:host=localhost;dbname=localisation", "root", "");
$country_id = $_GET['country_id'];
$stmt = $conn->prepare("SELECT * FROM states WHERE country_id = ?");
$stmt->execute([$country_id]);
while ($row = $stmt->fetch()) {
  echo "<option value='{$row['id']}'>{$row['name']}</option>";
}
?>
