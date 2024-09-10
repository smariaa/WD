<?php
session_start();
require 'db.php';

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.html");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_username = $_POST['username'];
    $new_password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;

    $user_id = $_SESSION['user_id'];

    // Update user data
    if ($new_password) {
        $stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
        $stmt->execute([$new_username, $new_password, $user_id]);
    } else {
        $stmt = $conn->prepare("UPDATE users SET username = ? WHERE id = ?");
        $stmt->execute([$new_username, $user_id]);
    }

    echo "Profile updated successfully! <a href='dashboard.php'>Back to Dashboard</a>";
}
?>