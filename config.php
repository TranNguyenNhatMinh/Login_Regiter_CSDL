<?php
$servername = "localhost";
$username = "root"; // tên mặc định của XAMPP
$password = ""; // thường để trống
$dbname = "user_db";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
