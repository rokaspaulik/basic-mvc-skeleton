<?php

namespace Rokas\Demo\App\Controllers;

class HomeController
{
    public static function index()
    {
        require(__DIR__ . '/../Views/home.php');
    }
}
