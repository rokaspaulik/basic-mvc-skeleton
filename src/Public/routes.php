<?php

use Rokas\Demo\App\Controllers\HomeController;
use Rokas\Demo\App\Services\Router;

Router::get('/', [HomeController::class, 'index']);
