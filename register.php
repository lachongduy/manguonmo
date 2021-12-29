<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="../../../tuan6-1123/views/sach/index.css" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .form {
 max-width: 350px;
 border: 1px solid green;
 padding: 20px;
 margin: 0 auto;
 font-weight: 700px;
}
.form input {
 width: 100%;
 padding: 10px 0;
}
#dangnhap{
    width: 100%;
    padding: 10px 0;
}
</style>
</head>
<body>

<form method="post" action="register.php" class="form my-5 ">

<h2 class="text-center">Đăng ký tài khoản</h2>

Username: <input type="text" name="username" value="" required>

Password: <input type="text" name="password" value="" required/>

Email: <input type="email" name="email" value="" required/>



<input class="my-3" type="submit" name="dangky" value="Đăng Ký"/>
<a href="loginkh.php" class="btn btn-primary my-2" id="dangnhap">Quay về đăng nhập</a> 
<?php require 'xulyregister.php';?>
</form>

</body>
</html>