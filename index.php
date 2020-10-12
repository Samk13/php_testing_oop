<?php
require 'vendor/autoload.php';
$query = require "core/bootstrap.php";


// die(var_dump($app));
 require Router::load('routes.php')->direct(Request::uri(), Request::method());