<?php

use RokasPaulikas\BasicMVC\App\Controllers\HomeController;
use RokasPaulikas\BasicMVC\App\Services\Router;

Router::get('/', [HomeController::class, 'index']);
