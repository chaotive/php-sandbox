<?php

use Slim\Factory\AppFactory;
use src\modules\Controllers;

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/modules/Controllers.php';

$app = AppFactory::create();
$app->get('/', Controllers::processRoot(" On /"));
$app->get('/test', Controllers::processRoot(" On /test"));
$app->run();
