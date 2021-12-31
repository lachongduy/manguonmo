<?php

    $username =$_POST['username'];
    $password =$_POST['password'];

    //so sanh co trung dlieu trog db
    $temp = new mysqli('localhost', 'root', '', 'bookstore');

    $sql ="SELECT * FROM taikhoan WHERE username = '$username' and password='$password' ";
    $result = $temp->query($sql)->fetch_assoc();
    if($result['password'] == $password)
    {
         header('location: http://localhost/lachongduy_DH51804418/tuan6-1123/admin/admin.php');
    } 
    else
    {    header('location: login.php');
        

    }
        $temp->close();
?>