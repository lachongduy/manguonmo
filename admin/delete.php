<?php
require_once './config.php';
//===================================//
$sql = "DELETE FROM book where book_id = '$id'";
$query = mysqli_query($connect, $sql);
header("location: ../admin/admin.php");
