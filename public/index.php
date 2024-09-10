<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$vars){
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

spl_autoload_register(function($class){
    $class = substr($class, 4);
    require_once "src/$class.php";
});

use App\Router;

Router::addRoute('/', function(){
    include 'views/index.php';
});

Router::addRoute('/us', function(){
    include 'views/us.php';
});

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();

if($match){
    call_user_func($match['action']);
} else {
    http_response_code(404);
}




/*
switch($_SERVER['REQUEST_URI']){
    case '/':
        include 'views/index.php';
        break;
    case '/us':
        include 'views/us.php';
        break;
    default:
        echo '404';
        break;
}
*/