<?php if (!isset($_SESSION['admin'])): ?>
    <div class="col xl-3 lg-0 md-0">
        <!-- Đăng ký / Đăng nhập -->
        <div class="acount">
            <h6 class="admin-title">Tài khoản</h6>
            <?php if (isset($_SESSION['user_name'])): ?>
                <div class="account-info">
                    <img src="<?= $_SESSION['image'] ?>" alt="" class="account-img">
                    <span class="account-name"><?= $_SESSION['user_name'] ?></span>
                </div>
            <?php endif; ?>

            <div class="account-form">
                <?php if (empty($_SESSION['user_name'])): ?>

                    <a class="forgot-pass" href="<?= BASE_URL . '/login' ?>">Đăng nhập</a>
                    <a href="" class="forgot-pass">Đăng ký thành viên</a>
                <?php else: ?>
                    <a href="<?= BASE_URL ?>/changeLogin?id=<?= $_SESSION['id']?>" class="forgot-pass">Đổi mật khẩu</a>
                    <a href="<?= BASE_URL ?>/updateAccount?id=<?= $_SESSION['id'] ?>" class="forgot-pass">Cập nhật tài khoản</a>
                    <?php if ($_SESSION['role'] == 'admin'): ?>
                        <a href="<?= BASE_URL . '/admin-handle' ?>" class="forgot-pass">Quản trị website</a>
                    <?php endif; ?>
                    <a href="<?= BASE_URL . '/logout' ?>" class="forgot-pass">Đăng xuất</a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Danh mục -->
        <div class="category">
            <h6 class="admin-title">DANH MỤC</h6>
            <ul class="base-list">
                <?php
                require "./config/category.php";
                ?>
            </ul>
            <div class="search-key form-group">
                <input type="text" class="search-key-input form-control" placeholder="Từ khóa tìm kiếm">
            </div>
        </div>

        <!-- Top 10 yêu thích -->
        <div class="top-ten">
            <h6 class="admin-title">TOP 10 YÊU THÍCH</h6>
            <ul class="base-list">
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=42" class="base-link"> 1.
                        IPhone XS Pro Max 128GB
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=43" class="base-link"> 2.
                        IPhone XS Pro Max 256GB
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=49" class="base-link"> 3.
                        Laptop HP OMEN X 17
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=50" class="base-link"> 4.
                        Laptop Fujitsu UH-X
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=55" class="base-link"> 5.
                        PC Intel X Core i5-13600X
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=56" class="base-link"> 6.
                        PC AI AMD 3955WX
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=64" class="base-link"> 7.
                        Android Tivi Sony X 4K KD-65X8500G
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=68" class="base-link"> 8.
                        Tivi Xiaomi Redmi AI Smart X75
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=74" class="base-link"> 9.
                        Tablet Lenovo Tab XS Pro
                    </a>
                </li>
                <li class="base-item">
                    <a href="http://localhost/xshop/productDetail?id=75" class="base-link"> 10.
                        Tablet Lenovo Tab X11
                    </a>
                </li>

            </ul>
        </div>
    </div>
<?php endif; ?>