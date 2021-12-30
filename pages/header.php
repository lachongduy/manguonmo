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
            <li class="nav-item active">
             <a class="nav-link" href="about.php" >About</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
             <a class="nav-link" href="about.php" >About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=sach&action=tatca">Tất cả sách</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh sách loại</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php while ($row_cat = mysqli_fetch_assoc($query_cat)) { ?>

                        <a class="dropdown-item" href="index.php?controller=sach&action=filterCat&cat=<?php echo $row_cat['cat_id'] ?>"><?php echo $row_cat['cat_name'] ?></a>
                    <?php } ?>
                </div>
            </li>
            <li class=" nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh sách nhà sản xuất</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php while ($row_pub = mysqli_fetch_assoc($query_pub)) { ?>
                        <a class="dropdown-item" href="index.php?controller=sach&action=filterPub&pub=<?php echo $row_pub['pub_id'] ?>"><?php echo $row_pub['pub_name'] ?></a>
                    <?php } ?>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="loginkh.php">Đăng nhập</a>
                    <a class="dropdown-item" href="register.php">Đăng ký</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" action='index.php' method='get'>
            <input type="hidden" name='controller' value='sach'>
            <input type="hidden" name='action' value='search'>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name='kw'>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
                        <a class="dropdown-item" href="index.php?controller=sach&action=filterCat&cat=<?php echo $row_cat['cat_id'] ?>"></a>
                    <?php } ?>
                </div>
            </li>
        </ul>

            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=sach&action=tatca">Tất cả sách</a>
            </li>
                
  </div>
</nav>