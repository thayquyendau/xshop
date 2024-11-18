<?php 
namespace controllers\client;
use models\Home;

    class HomeController {
        public $modelObject;
        public $modelObjects;
        public function __construct()
        {
            $this->modelObject = new Home();
        }

        public function index() {
            unset($_SESSION['admin']);
            $products= $this->modelObject->getAllCategory();    
            require_once './src/views/client/home/home.php';
        }

        public function review() {
            unset($_SESSION['admin']);
           
            require_once './src/views/client/home/giohang.php';
        }

        public function lienhe() {
            unset($_SESSION['admin']);
            require_once './src/views/client/home/thanhtoan.php';
        }

        public function gopy() {
            unset($_SESSION['admin']);
            require_once './src/views/client/home/gopy.php';
        }
        public function hoidap() {
            unset($_SESSION['admin']);
            require_once './src/views/client/home/hoidap.php';
        }   
    }
?>