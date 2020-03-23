<?php

require_once 'index.php';
require_once 'app/Migrations.php';

$migration = new \app\Migrations();
$migration->up();
//$migration->down();