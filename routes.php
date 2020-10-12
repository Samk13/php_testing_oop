<?php

// $router->define(
//     [
//         '' => 'controllers/index.php',
//         'about' => 'controllers/about.php',
//         'contact' => 'controllers/contact.php',
//         'about/culture' => 'controllers/culture.php',
//         'names' => 'controllers/add-name.php',
//     ]
// );


// GET
$router->get('' , 'controllers/index.php');
$router->get('about' , 'controllers/about.php');
$router->get('contact' , 'controllers/contact.php');
$router->get('about/culture' , 'controllers/culture.php');


//POST
$router->post('names' , 'controllers/add-name.php');

// var_dump($router->routes);