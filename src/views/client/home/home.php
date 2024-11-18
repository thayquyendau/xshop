
    <h6 class="admin-title">Các Sản Phẩm Nổi Bật</h6>
    <div class="row product-list">
        <?php foreach($products as $product): ?>
        <div class="col xl-4 lg-3 md-6">
            <a href="<?= BASE_URL?>/productDetail?id=<?= $product['id'] ?>" class="product-detail-item">
                <img src="<?= $product['hinh_anh'] ?>" width="100%" alt="">
            </a>
            <p style="text-align: center;"><?= $product['ten_san_pham'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
    
  

    
