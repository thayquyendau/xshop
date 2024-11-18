<div class="col xl-12">
    <h2 class="admin-title">quản lý Binh Luan</h2>
    <table>
        <thead>
            <th>ID</th>
            <th>user</th>
            <th>Comment</th>
            <th>Ma sản phẩm</th>
            <th>Thao tác</th>
        </thead>
        <tbody style="text-align: center;">
            <?php
                foreach ($comments as $comment):
                    ?>
                    <tr>
                        <td><?= $comment['id'] ?></td>
                        <td><?= $comment['user'] ?></td>
                        <td><?= $comment['noi_dung'] ?></td>
                        <td><?= $comment['ma_san_pham'] ?></td>
                        <td>
                            <a href="<?= BASE_URL ?>/admin/comment/update?id=<?= $comment['id'] ?>"><button>Sửa</button></a>
                            <a href="<?= BASE_URL ?>/admin/comment/delete?id=<?= $comment['id']?>"><button>Xoa</button></a>
                        </td>
                    </tr>
                        <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>