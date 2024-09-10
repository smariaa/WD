<?php
session_start();
require 'db.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['user_id'] != 1) {
    header("Location: login.html");
    exit;
}

$stmt = $conn->prepare("SELECT username, email, created_at FROM users");
$stmt->execute();
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>
<body>
    <h2>All Registered Users</h2>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Registered At</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['created_at']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="dashboard.php">Back to Dashboard</a>
</body>
</html>