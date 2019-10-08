<?php

session_start();

require "../vendor/autoload.php";
use App\Core\Router;

// echo "Hi world!";

(new Router())->run();
