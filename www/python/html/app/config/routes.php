<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->setDefaultController("Pages");


//Pages routes
$router->add("/", ["action" => "index"]);
$router->add("/table", ["action" => "table"]);
$router->add("/users", ["action" => "tableuser"]);
$router->add("/adduser", ["action" => "adduser"]);
$router->add("/settings", ["action" => "usersettings"]);


$router->add("/test", ["action" => "test"]);

//Api routes
$router->add("/getUser", ["action" => "getuser"]);
$router->add("/laserOff", ["action" => "laserOff"]);

$router->addPost("/gettable", ["action" => "gettable"]);

//User routes
$router->add("/auth", ["controller" => "Auth","action" => "index"]);
$router->add("/reg", ["controller" => "Auth","action" => "reg"]);

$router->addPost("/register", ["controller" => "Auth","action" => "register"]);
$router->addPost("/login", ["controller" => "Auth","action" => "login"]);

$router->add("/logout", ["controller" => "Auth","action" => "logout"]);




$router->removeExtraSlashes(true);
return $router;