<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
    //Kết nối tới database
    $connect = mysqli_connect ('localhost', 'root', '', 'bookstore') or die ('Không thể kết nối tới database');
    mysqli_set_charset($connect, 'UTF8');

    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
    echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
    }

    // mã hóa pasword
    $password = md5($password);

    //Kiểm tra tên đăng nhập có tồn tại không
    $query = "SELECT username, password FROM taikhoankh WHERE username='$username'";

    $result = mysqli_query($connect, $query) or die( mysqli_error($connect));

    if ($result) {
        echo '<script language="javascript">alert("Đăng nhập thành công!"); window.location="index.php";</script>';
    } else {
        echo '<script language="javascript">alert("Đăng nhập không thành công. Vui lòng kiểm tra lại tài khoản và mật khẩu!"); window.location="login.php";</script>';
    }

    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($result);

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

//Lưu tên đăng nhập
$_SESSION['username'] = $username;
echo "Xin chào <b>" .$username;
die();
$connect->close();
}
?>