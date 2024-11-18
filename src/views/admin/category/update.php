
<form action="" method="post">
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" required id="id" name="id" value="<?= $category['id'] ?>" readonly>
        <label for="ma_loai">Ma Loai</label>
        <input type="text" class="form-control" required id="ma_loai" name="ma_loai" value="<?= $category['ma_loai'] ?>">
        <label for="ten_loai">Tên loai</label>
        <input type="text" class="form-control" required id="ten_loai" name="ten_loai" value="<?= $category['ten_loai'] ?>">
    </div>
    <button class="btn btn-primary" >Lưu</button>
</form>