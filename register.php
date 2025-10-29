<?php
include('config.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mã hóa mật khẩu để bảo mật
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Lưu dữ liệu vào database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Đăng ký thành công!'); window.location='login.php';</script>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
</head>
<body>
    <h2>Form Đăng ký</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Tên người dùng" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Mật khẩu" required><br><br>
        <input type="submit" name="register" value="Đăng ký">
    </form>
    <p>Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
</body>
</html>
