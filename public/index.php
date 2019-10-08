<?php

session_start();

require "../vendor/autoload.php";

use App\Core\Router;
use App\Core\Auth;

echo Auth::registerUser('rr', 4);

// echo "Hi world!";

// (new Router())->run();
// use TexLab\MyDB\DbEntity;
// use TexLab\MyDB\DB;

// $link = DB::Link([
//     'host' => 'localhost',
//     'username' => 'root',
//     'password' => '',
//     'dbname' => 'eshop'
// ]);

// // $table1 = new DbEntity('users', $link);

// // echo json_encode($table1->get());

// use  App\Model\AuthModel;

// $obj = new AuthModel($link);
// print_r($obj->getUserData('rr', '4'));
