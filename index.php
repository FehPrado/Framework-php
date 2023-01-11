<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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

$router->register('/roteiros', 'get', 'ItineraryController', 'index');
$router->register('/criar-roteiros', 'get', 'ItineraryController', 'index');
$router->register('/apagar-roteiros', 'get', 'ItineraryController', 'index');
$router->register('/editar-roteiros', 'get', 'ItineraryController', 'index');
$router->register('/editar-roteiros', 'get', 'ItineraryController', 'index');




?>
