    <?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->setDefaultController("Pages");


//Pages routes
$router->add("/", ["action" => "index"]);
$router->add("/team", ["action" => "team"]);
$router->add("/zdania", ["action" => "zdania"]);
$router->add("/table", ["action" => "table"]);


$router->add("/test", ["action" => "test"]);

//User routes
$router->add("/auth", ["controller" => "Auth","action" => "index"]);
$router->add("/reg", ["controller" => "Auth","action" => "reg"]);

$router->addPost("/register", ["controller" => "Auth","action" => "register"]);
$router->addPost("/login", ["controller" => "Auth","action" => "login"]);

$router->add("/logout", ["controller" => "Auth","action" => "logout"]);

$router->removeExtraSlashes(true);
return $router;