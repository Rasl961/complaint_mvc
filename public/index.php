<?php
session_start();
if (isset($_SESSION['logged_status'])=='') {
    $_SESSION['logged_status'] = '';
    header('Location:/index.php');
    exit();
}

//Routing

spl_autoload_register(function ($class) {
    $root = dirname(__DIR__); //get th eparent directory
    $file = $root . '/' .str_replace('\\', '/', $class).'.php';
   
    if (is_readable($file)) {
        require $file;
    }
});

$router = new Core\Router();

// Add the routes 

$router->add('', ['controller' => 'Admin', 'action' =>'index']);
$router->add('', ['controller' => 'Auth', 'action' => 'index']);
$router->add('', ['controller' => 'Dashboard', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$router->dispatch($_SERVER['QUERY_STRING']);
