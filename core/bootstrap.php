<?php

$app = [];

require  'core/router/router.php';
require  'core/database/Connections.php';
require  'core/database/QueryBuilder.php';
require  'core/database/Request.php';

$app['config'] = require "./config.php";

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);