<div class="header">
    <ul class="header-list">
        <li>
            <a href="<?= BASE_URL . '/' ?>">
                <img class="header-img" src="./assets/image/header/QTPedu.png" alt="QTPedu Logo">
            </a>
        </li>
        <li class="search-container">
            <input type="text" placeholder="Tìm khóa học, giảng viên">
            <button type="submit">&#128269;</button>
        </li>
        <li class="header-item">Giáo viên</li>
        <li class="header-item">Học viên</li>
        <li class="header-item">
            <a href="cart.php" class="add-to-cart" title="Thêm vào giỏ hàng">
                <i class="material-icons">shopping_cart</i>
            </a>
        </li>
        <li class="header-item">Đăng nhập</li>
        <li>
            <button class="button-dk">Đăng ký</button>
        </li>
    </ul>

</div>
<nav class="main-menu">
    <ul class="menu-list">
        <li class="menu-item">
            <a href="<?= BASE_URL ?>/category" class="item-link">
                <img width="20px" height="20px" src="assets/image/logo_danhmuc.svg" alt=""> Danh mục
            </a>
            <!-- Danh sách danh mục sẽ ẩn đi và chỉ hiện khi hover -->
            <ul class="base-list">
                <?php if (isset($categories) && !empty($categories)) : ?>
                    <?php foreach ($categories as $category) : ?>
                        <li class="base-item">
                            <a href="<?= BASE_URL ?>/category?ma_loai=<?= $category['ma_loai'] ?>" class="base-link">
                                <?= $category['ten_loai'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </li>
        <li class="menu-item">
            <a href="<?= BASE_URL ?>/" class="item-link">Trang chủ</a>
        </li>
        <li class="menu-item">
            <a href="<?= BASE_URL ?>/review" class="item-link">Giới thiệu</a>
        </li>
        <li class="menu-item">
            <a href="<?= BASE_URL ?>/thanhtoan" class="item-link">Tin tức</a>
        </li>
        <li class="menu-item">
            <a href="<?= BASE_URL ?>/gopy" class="item-link">Liên hệ</a>
        </li>
        <li class="menu-item">
            <a href="<?= BASE_URL ?>/hoidap" class="item-link">
                <img width="20px" height="20px" src="assets/image/logo_thongbao.svg" alt="">
            </a>
        </li>
    </ul>
</nav>