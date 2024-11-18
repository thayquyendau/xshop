<div class="col xl-9">
    <h6 class="login-title">Cập nhật tài khoản</h6>

    <form class="login-form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên đăng nhập:</label>
            <input type="text" class="form-control" name="user_id" placeholder="Tên đăng nhập" 
            value="<?= isset($users['user_id']) ? htmlspecialchars($users['user_id']) : '' ?>">
        </div>
        <div class="form-group">
            <label for="">Họ và tên:</label>
            <input type="text" class="form-control" placeholder="Họ và tên" name="user_name" 
                   value="<?= isset($users['user_name']) ? htmlspecialchars($users['user_name']) : '' ?>">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ email:</label>
            <input type="text" class="form-control" placeholder="Địa chỉ email" name="email" 
                   value="<?= isset($users['email']) ? htmlspecialchars($users['email']) : '' ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh:</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button class="btn-login">Cập nhật</button>
    </form>
</div>
