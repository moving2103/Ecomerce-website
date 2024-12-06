<?php
$con = mysqli_connect('localhost', 'root', '', 'mystore');

if (!$con) {
    // Chỉ gọi mysqli_error khi kết nối không thành công
    die('Kết nối thất bại: ' . mysqli_connect_error());
}
?>