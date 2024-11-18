<div class="col xl-12">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <div class="group-item">
            <h2>ID</h2>
            <input type="text" class="form-control" value="<?= $products['id'] ?>" readonly>
        </div>
        <div class="group-item">
            <h2>Ma Loai</h2>
            <input type="text" class="form-control" value="<?= $products['ma_loai'] ?>" >
        </div>
        <div class="group-item">
            <h2>Ma SP</h2>
            <input type="text" class="form-control" required id="ma_san_pham" name="ma_san_pham" value="<?= $products['ma_san_pham'] ?>">
        </div>
        <div class="group-item">
            <h2>Tên SP</h2>
            <input type="text" class="form-control" required id="ten_san_pham" name="ten_san_pham" value="<?= $products['ten_san_pham'] ?>">
        </div>
        <div class="group-item">
            <h2>Hinh Anh</h2>
            <input type="file" class="form-control" id="hinh_anh" name="hinh_anh" value="<?= $products['hinh_anh'] ?>">
        </div>
    </div>
    <button class="btn btn-primary" >Lưu</button>
</form>
</div>