<?php
namespace controllers\admin;

use models\Product;


class ProductController
    {
    public $modelObject;
    public $base = BASE_URL;
    public function __construct()
    {
    $this->modelObject = new Product();
    }
    public function index()
        {
        //$_SESSION['admin'] = 1;
        $products = $this->modelObject->getAllProduct();
        require_once './src/views/admin/product/index.php';
        }
   

    public function delete(){
        $id = $_GET['id'];
        $this->modelObject->deleteProduct($id);
        header("location: $this->base/admin/product");
        }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] =='POST'){
        if(isset($_FILES) && $_FILES['hinh_anh']['size'] > 0){
            $fileExtension = strtolower(pathinfo($_FILES['hinh_anh']['name'], PATHINFO_EXTENSION));
            if (in_array($fileExtension,['jpg', 'png', 'jfif'])) {
            $dir = "assets/image/product";
            $tmp_name = $_FILES['hinh_anh']['tmp_name'];
            $file_name = $_FILES['hinh_anh']['name'];
            $_POST['hinh_anh'] = "$dir/$file_name";
            // debug($_POST['hinh_anh']);
            move_uploaded_file($tmp_name, $_POST['hinh_anh']);

        }else{
                echo "<h1>Lỗi: Định dạng file tải lên không hợp lệ<h1>";
                return;    
        } 
        }
        $this->modelObject->createProduct($_POST);
        header("location: $this->base/admin/product");
        } else {
        require_once './src/views/admin/product/create.php';
        }
    }

    public function update(){
        $id = $_GET['id'];
            if($_SERVER['REQUEST_METHOD'] =='POST'){
                if(isset($_FILES) && $_FILES['hinh_anh']['size'] > 0){
                    $fileExtension = strtolower(pathinfo($_FILES['hinh_anh']['name'], PATHINFO_EXTENSION));
                    if (in_array($fileExtension,['jpg', 'png', 'jfif'])) {
                        $dir = "assets/image/product";
                        $tmp_name = $_FILES['hinh_anh']['tmp_name'];
                        $file_name = $_FILES['hinh_anh']['name'];
                        $_POST['hinh_anh'] = "$dir/$file_name";
                        // debug($_POST['hinh_anh']);
                        move_uploaded_file($tmp_name, $_POST['hinh_anh']);
    
                    }else{
                        echo "<h1>Lỗi: Định dạng file tải lên không hợp lệ<h1>";
                        return;    
                    } 
                }
                $_POST['id'] = $id;
                $this->modelObject->updateProduct($_POST);
                header("location: $this->base/admin/product");
            } else {
                $products = $this->modelObject->getProductById($id);
                require_once './src/views/admin/product/edit.php';
            }
        }
    }

?>