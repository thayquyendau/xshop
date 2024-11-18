<?php
$categoryController = new \controllers\client\CategoryController();
$categoryController->index();
$categories = $categoryController->categories;

if (is_array($categories) && !empty($categories)) {
    foreach ($categories as $category) {
        ?>
        <li class="base-item"><a href="<?= BASE_URL ?>/category?ma_loai=<?= $category['ma_loai'] ?>" class="base-link"><?= $category['ten_loai'] ?></a></li>
        <?php
    }
} else {
    echo "No categories found.";
}
?>


<!-- <li class="base-item"><a href="" class="base-link"></a></li> -->