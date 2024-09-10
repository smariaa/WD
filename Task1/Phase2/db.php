<?php
$host = "localhost";
$dbname = "user_system";
$username = "root";  // Default MySQL user
$password = "";  // Default is empty for XAMPP/MAMP

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>