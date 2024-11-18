<div class="col xl-12">
    <h2 class="admin-title">quản lý SP</h2>
    <a href="<?= BASE_URL ?>/admin/product/create"><button>Thêm mới</button></a>
    <table>
        <thead>
            <th>ID</th>
            <th>Ma loai</th>
            <th>Ma SP</th>
            <th>Tên sản phẩm</th>
            <th>Nội Dung</th>
            <th>Hinh anh</th>
            <th>Thao tác</th>
        </thead>
        <tbody style="text-align: center;">
            <?php
                foreach ($products as $product):
                    ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['ma_loai'] ?></td>
                        <td><?= $product['ma_san_pham'] ?></td>
                        <td><?= $product['ten_san_pham'] ?></td>
                        <td><?= $product['noi_dung'] ?></td>
                        <td><img width="100px" height="100px" src="<?=BASE_URL."/". $product['hinh_anh'] ?>" alt="san pham"></td>
                        <td>
                            <a href="<?= BASE_URL ?>/admin/product/update?id=<?= $product['id'] ?>"><button>Sửa</button></a>
                            <a href="<?= BASE_URL ?>/admin/product/delete?id=<?= $product['id']?>"><button>Xoa</button></a>
                        </td>
                    </tr>
                        <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>