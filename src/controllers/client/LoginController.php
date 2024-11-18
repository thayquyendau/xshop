<?php

namespace controllers\client;

use models\Login;

class LoginController
{
    public $modelObject;
    public $baseUrl = BASE_URL;
    public function __construct()
    {
        $this->modelObject = new Login();
    }
    // public function index()
    // {
    //     // $users = $_SESSION['id'] ?? '';
    //     // debug($users);
    //     require_once './config/sideBar.php';
    // }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $accountInfo = $this->modelObject->findUser($_POST) ?? [];
            if ($accountInfo  === false) {
                $loginFailMess = "Sai tên truy cập hoặc mật khẩu";

                require_once './src/views/login/login.php';
            } else {
                //debug($accountInfo['user_name']);
                $_SESSION['user_name'] = $accountInfo['user_name'];
                $_SESSION['image'] = $accountInfo['image'];
                $_SESSION['role'] = $accountInfo['role'];
                $_SESSION['id'] = $accountInfo['id'];

                header("location: $this->baseUrl/");
            }
        } else {
            require_once './src/views/login/login.php';
        }
    }

    public function logout()
    {
        session_unset();
        header("location: $this->baseUrl/");
    }
    //UPdate chua hoan thien
    public function updateAccount()
    {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_FILES) && $_FILES['image']['size'] > 0) {
                $fileExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                if (in_array($fileExtension, ['jpg', 'png', 'gif'])) {
                    $dir = "assets/image/account";
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $file_name = $_FILES['image']['name'];
                    $_POST['image'] = "$dir/$file_name";
                    move_uploaded_file($tmp_name, $_POST['image']);
                } else {
                    echo "<h1>Lỗi: Định dạng file tải lên không hợp lệ<h1>";
                    return;
                }
            }
            $_POST['id'] = $id;
            $this->modelObject->updateUser($_POST);
            header("location: $this->baseUrl/");
        } else {
            $users = $this->modelObject->getUserById($id);
            require_once './src/views/login/updateAccount.php';
        }
    }
    public function changeLogin()
    {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id'] = $id;
            $this->modelObject->updateUser($_POST);
            header("location: $this->baseUrl/");
            exit();
        } else {
            $users = $this->modelObject->getUserById($id);
            require_once './src/views/login/changeLogin.php';
        }
    }
}
