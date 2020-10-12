<?php
require 'vendor/autoload.php';
$query = require "core/bootstrap.php";

use App\Core\Router;
use App\Core\Request;


// die(var_dump($app));
Router::load('app/routes.php')->direct(Request::uri(), Request::method());