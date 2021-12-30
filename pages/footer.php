<nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
            <?php
            for($i=1; $i<=7; $i++){ ?>
            <li class="page-item">
            <a class="page-link" href="index.php?pageNum=<?php echo $i?>">
                <?php echo $i?>
            </a>
            </li>
            <?php } ?>
        </ul>
        </nav>


<div id="footer" style="bottom: 0px;">
<a class="btn btn-info my-3" href="admin/login.php" >Đi tới trang quản lý</a>
</div>


