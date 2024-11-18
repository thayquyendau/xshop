<?php 
namespace controllers\client;
use models\Category;
use models\Product;

class CategoryController{
    public $modelObject;
    public $productObject;
    public $categories;
    public function __construct()
    {
        $this->modelObject = new Category();
        $this->productObject = new Product();

    }

    public function index() {
       $categories = $this->modelObject->getAllCategory();
    }
    public function mobile(){
        $id = $_GET['ma_loai'];
        $products = $this->productObject->getAllProductbyId($id);
        $categories = $this->modelObject->getAllCategory();
        require_once './src/views/client/products/index.php';
    }

}
