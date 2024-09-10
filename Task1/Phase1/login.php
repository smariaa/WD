<?php
session_start();

$valid_username = "Mystery";
$valid_password = "12345678";

// Retrieve the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the input
if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Invalid username or password. <a href='login.html'>Try again</a>";
}
?>