<?php
// Config สำหรับรับบนเซิร์ฟเวอร์ Angsila
$host = 'localhost';
$user = 's68160201';       // เติม s นำหน้าตามตาราง
$pass = 'YOUR_PASSWORD';   // ซ่อนรหัสผ่านจริงก่อน Push ขึ้น Public GitHub
$dbname = 's68160201';     // ชื่อฐานข้อมูล

$conn = @mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    error_log(mysqli_connect_error());
    http_response_code(500);
    exit('Database unavailable: ' . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf8mb4');