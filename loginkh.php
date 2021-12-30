<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container" >
        <h3 class=" text-center my-5">LOGIN</h3>
        <form action="xulykh.php"  method="POST">
            Username <input type="text" name="username" class="form-control" required="">
            Password <input type="password" name="password" class="form-control" required="">
            <input type="submit" class="btn btn-block btn-info my-3" name="dangnhap" value="Đăng nhập">
            
        </form>
       <a href="register.php"> <input type="submit" class="btn btn-block btn-primary my-3" value="Đăng ký"></a>
    </div>
    
</body>
</html>