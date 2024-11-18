<div class="col xl-9">
    <h6 class="login-title">Đổi mật khẩu</h6>

    <?php if (isset($error) && !empty($error)): ?>
        <div class="error-message"><?php echo ($error); ?></div>
    <?php endif; ?>

    <form class="login-form" action="" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="Mật khẩu cũ" required value="<?= $users['password'] ?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mật khẩu mới" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Xác nhận mật khẩu mới" required>
        </div>
        <button class="btn-login">Đổi mật khẩu</button>
    </form>
</div>