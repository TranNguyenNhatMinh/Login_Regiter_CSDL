<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chào mừng</title>
</head>
<body>
    <h2>Xin chào, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Bạn đã đăng nhập thành công.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
