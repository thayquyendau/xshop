<div class="col xl-12">
    <h2 class="admin-title">quản lý Khach hang</h2>
    <a href="<?= BASE_URL ?>/admin/users/create"><button>Thêm mới</button></a>
    <table>
        <thead>
            <th>ID</th>
            <th>MaKH</th>
            <th>Tên KH</th>
            <th>PassWord</th>
            <th>Level</th>
            <th>Email</th>
            <th>Image</th>
            <th>Thao tác</th>
        </thead>
        <tbody style="text-align: center;">
            <?php
                foreach ($users as $user):
                    ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['user_id'] ?></td>
                        <td><?= $user['user_name'] ?></td>
                        <td><?= $user['password'] ?></td>
                        <td><?= $user['role'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><img width="100px" height="100px" src="<?= BASE_URL."/". $user['image'] ?>" alt=""></td>
                        <td>
                            <a href="<?= BASE_URL ?>/admin/users/update?id=<?= $user['id'] ?>">Sửa</a>
                            <a href="<?= BASE_URL ?>/admin/users/delete?id=<?= $user['id']?>">Xóa</a>
                        </td>
                    </tr>
                        <?php
                endforeach;
            ?>
        </tbody>
    </table>
</div>