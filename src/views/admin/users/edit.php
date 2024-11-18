<div class="col xl-12">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <div class="group-item">
            <h2>ID</h2>
            <input type="text" class="form-control"  value="<?= $users['id']?>" name="id" readonly >
        </div>
        <div class="group-item">
            <h2>Ma KH</h2>
            <input type="text" class="form-control" required value="<?= $users['user_id']?>" name="user_id" >
        </div>
        <div class="group-item">
            <h2>Tên KH</h2>
            <input type="text" class="form-control" required value="<?= $users['user_name']?>" name="user_name">
        </div>
        <div class="group-item">
            <h2>PassWord</h2>
            <input type="text" class="form-control" required value="<?= $users['password']?>" name="password">
        </div>
        <div class="group-item">
            <h2>Level</h2>
            <input type="text" class="form-control" required value="<?= $users['role']?>" name="role">
        </div>
        <div class="group-item">
            <h2>Email</h2>
            <input type="text" class="form-control" required value="<?= $users['email']?>" name="email">
        </div>
        <div class="group-item">
            <h2>Hinh Anh</h2>
            <input type="file" class="form-control" value="<?= $users['image']?>" name="image">
        </div>
    </div>
    <button  class="btn btn-primary" >Lưu</button>
</form>
</div>