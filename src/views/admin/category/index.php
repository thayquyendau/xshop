<div class="col xl-12">
    <h2 class="admin-title">quản lý loại hàng</h2>
    <a href="<?= BASE_URL ?>/admin/category/create"><button>Thêm mới</button></a>
    <table>
        <thead>
            <th>ID</th>
            <th>Ma loai</th>
            <th>Tên loại</th>
            <th>Thao tác</th>
        </thead>
        <tbody style="text-align: center;">
            <?php
                foreach ($categories as $category):
                    ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td><?= $category['ma_loai'] ?></td>
                        <td><?= $category['ten_loai'] ?></td>
                        <td>
                            <a href="<?= BASE_URL ?>/admin/category/update?id=<?= $category['id'] ?>">Sửa</a>
                            <a href="<?= BASE_URL ?>/admin/category/delete?id=<?= $category['id']?>">Xóa</a>
                        </td>
                    </tr>
                        <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>