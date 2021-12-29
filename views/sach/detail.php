<link rel="stylesheet" href="../../../tuan6-1123/views/sach/index.css" type="text/css">

<div class="cover-product-detail">
    <p class="title"><?php echo $data['book_name'] ?></p>
    <div class="cover-img-content">
        <img class="product-img" src="../../../lachongduy_DH51804418/tuan6-1123/assets/img/book/<?php echo $data['img'] ?>" alt="Sách 1">
        <p class="description"><?php echo $data['description'] ?></p>
    </div>
    <p class="price"><?php echo $data['price'] ?> vnd</p>
    <a href="cart.php?id=<?php echo $data['book_id'] ?>" class="btn btn-primary">Mua sách</a>
</div>