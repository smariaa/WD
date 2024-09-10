<?php
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Check the user's credentials
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user['username'];
    $_SESSION['user_id'] = $user['id'];
    header("Location: dashboard.php");
} else {
    echo "Invalid email or password. <a href='login.html'>Try again</a>";
}
?>