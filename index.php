<?php
$query = require "bootstrap.php";
require "classes.php";

$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';