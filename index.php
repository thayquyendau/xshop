<?php 
use models\Category;
    session_start();
    require_once './src/commons/functions.php';
    require_once './src/commons/evr.php';
    require_once './src/commons/baseModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    require_once './config/head.php';
?>
<body>
    <div class="grid wide">
        <?php 
            require_once './config/header.php';
        ?>
        <div class="row">
        <?php 
            require_once './router/index.php';    
            // require_once './config/sideBar.php';       
        ?>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <span>Xshop-quyendau05 Copyright 2024</span>
    </div>
    <script src="./assets/js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>