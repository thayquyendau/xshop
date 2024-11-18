<?php 
    autoLoad('./src/controllers/client/');
    autoLoad('./src/models/');

    use router\router;
    require_once './router/index.php';

    $router->add("GET", "client", "/", "HomeController@index");
    $router->add("GET", "client", "/index.php", "HomeController@index");
    $router->add("GET", "client", "/review", "HomeController@review");
    $router->add("GET", "client", "/thanhtoan", "HomeController@lienhe");
    $router->add("GET", "client", "/gopy", "HomeController@gopy");
    $router->add("GET", "client", "/hoidap", "HomeController@hoidap");


    //Dieu huong danh muc
    $router->add("GET", "client", "/category", "CategoryController@index");

    //Thao tac user
    // $router->add("GET", "client", "/", "LoginController@index");
    $router->add("GET", "client", "/login", "LoginController@login");
    $router->add("POST", "client", "/login", "LoginController@login");
    $router->add("GET", "client", "/logout", "LoginController@logout");
    $router->add("GET", "client", "/changeLogin", "LoginController@changeLogin");
    $router->add("POST", "client", "/changeLogin", "LoginController@changeLogin");
    $router->add("GET", "client", "/updateAccount", "LoginController@updateAccount");
    $router->add("POST", "client", "/updateAccount", "LoginController@updateAccount");

    //Dieu huong category
    $router->add("GET", "client", "/category", "CategoryController@mobile");
    //Dieu huong chi tiet san pham
    $router->add("GET", "client", "/productDetail", "ProductController@productDetail");
    $router->add("POST", "client", "/productDetail", "ProductController@create");
    // $router->add("GET", "client", "/productDetail", "ProductController@ViewComment");

    $router->solve("client");
    // debug($router);
?>