<?php
/* Thông tin CSDL. Giả sử bạn đang chạy MySQL Server với thiết lập mặc định (user 'root' và không có mật khẩu) */
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bookstore');
/* Cố gắng kết nối với cơ sở dữ liệu MySQL */
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql_cat = "SELECT * FROM category";
$query_cat = mysqli_query($connect, $sql_cat);
$sql_pub = "SELECT * FROM publisher";
$query_pub = mysqli_query($connect, $sql_pub);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light my-5">

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          
            <li class="nav-item active">
             <a class="nav-link" href="about.php" >About</a>
            </li>
        </ul>    

    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=sach&action=tatca">Tất cả sách</a>
            </li>
            
        </ul>
        

    </div>
</nav>