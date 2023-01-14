<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body>
  
</body>
</html>

<?php
include_once 'includes/navbar.php';

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '123456789');
define('BASE', 'itinerary');

spl_autoload_register(function ($className) { require_once "$className.php"; });

$router = new Router();

//web
$router->register('/', 'get', 'WebController', 'index');


// rotas produtos

// $router->register('/', 'get', 'ProductsController', 'index');
$router->register('/produtos', 'get', 'ProductsController', 'index');
$router->register('/novo-produto', 'get', 'ProductsController', 'new');
$router->register('/criar-produto', 'post', 'ProductsController', 'create');
$router->register('/apagar-produto/:id', 'get', 'ProductsController', 'destroy');
$router->register('/editar-produto/:id', 'get', 'ProductsController', 'edit');
$router->register('/editar-produto/:id', 'post', 'ProductsController', 'update');

//rotas roteiros

$router->register('/roteiro', 'get', 'ItineraryController', 'index');
$router->register('/novo-roteiro', 'get', 'ItineraryController', 'new');
$router->register('/criar-roteiro', 'post', 'ItineraryController', 'create');
$router->register('/apagar-roteiro/:id', 'get', 'ItineraryController', 'destroy');
$router->register('/editar-roteiro/:id', 'get', 'ItineraryController', 'edit');
$router->register('/editar-roteiro/:id', 'post', 'ItineraryController', 'update');
$router->register('/info-roteiro/:id', 'get', 'ItineraryController', 'show');

//rotas usuarios
$router->register('/usuario', 'get', 'UserController', 'index');
$router->register('/novo-usuario', 'get', 'UserController', 'new');
$router->register('/criar-usuario', 'post', 'UserController', 'create');
$router->register('/apagar-usuario/:id', 'get', 'UserController', 'destroy');
$router->register('/editar-usuario/:id', 'get', 'UserController', 'edit');
$router->register('/editar-usuario/:id', 'post', 'UserController', 'update');
$router->register('/info-usuario/:id', 'get', 'UserController', 'show');
$router->register('/login-usuario/', 'get', 'UserController', 'login');





?>
