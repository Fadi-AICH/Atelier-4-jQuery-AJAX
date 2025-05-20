<?php
$conn = new PDO("mysql:host=localhost;dbname=localisation", "root", "");
$sql = $conn->query("SELECT * FROM countries");
while ($row = $sql->fetch()) {


  echo "<option value='{$row['id']}'>{$row['name']}</option>";

}
?>
