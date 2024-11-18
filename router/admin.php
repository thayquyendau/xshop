<?php 
    autoLoad('./src/controllers/admin/');
    autoLoad('./src/models/');
    use router\router;
    require_once './router/index.php';
    
    $router->add("GET", "admin", "/admin", "AdminController@dashboard");

    //thanh menu admin
    $router->add("GET", "admin", "/admin-handle", "AdminController@adminHandle");
    
    //San Pham
    $router->add("GET", "admin", "/admin/product", "ProductController@index");
    $router->add("GET", "admin", "/admin/product/create", "ProductController@create");
    $router->add("POST", "admin", "/admin/product/create", "ProductController@create");
    $router->add("GET", "admin", "/admin/product/update", "ProductController@update");
    $router->add("POST", "admin", "/admin/product/update", "ProductController@update");
    $router->add("GET", "admin", "/admin/product/delete", "ProductController@delete");

    //Loai
    $router->add("GET", "admin", "/admin/category", "CategoryController@index");
    $router->add("GET", "admin", "/admin/category/create", "CategoryController@create");
    $router->add("POST", "admin", "/admin/category/create", "CategoryController@create");
    $router->add("GET", "admin", "/admin/category/update", "CategoryController@update");
    $router->add("POST", "admin", "/admin/category/update", "CategoryController@update");
    $router->add("GET", "admin", "/admin/category/delete", "CategoryController@delete");

    //Khach hang
    $router->add("GET", "admin", "/admin/users", "UserController@index");
    $router->add("GET", "admin", "/admin/users/create", "UserController@create");
    $router->add("POST", "admin", "/admin/users/create", "UserController@create");
    $router->add("GET", "admin", "/admin/users/update", "UserController@update");
    $router->add("POST", "admin", "/admin/users/update", "UserController@update");
    $router->add("GET", "admin", "/admin/users/delete", "UserController@delete");

    //Binh luan
    $router->add("GET", "admin", "/admin/comment", "CommentController@index");
    $router->add("GET", "admin", "/admin/comment/create", "CommentController@create");
    $router->add("POST", "admin", "/admin/comment/create", "CommentController@create");
    $router->add("GET", "admin", "/admin/comment/update", "CommentController@update");
    $router->add("POST", "admin", "/admin/comment/update", "CommentController@update");
    $router->add("GET", "admin", "/admin/comment/delete", "CommentController@delete");



    $router->solve("admin");
?>