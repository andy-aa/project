<?php

use TexLab\MyDB\DB;
use TexLab\MyDB\Runner;
use App\Core\Conf;

require __DIR__."/../vendor/autoload.php";

$file = file_get_contents(__DIR__.'/db.sql');
$mySQLConnectData = Conf::MYSQL;

unset($mySQLConnectData['dbname']);

// print_r($mySQLConnectData);



class NewRunner extends Runner {
    protected function errorHandler(array $error)
    {
        // print_r($error);
    }
}

$run = new NewRunner(DB::Link($mySQLConnectData));

foreach (explode(';', $file) as $value) {
    // print_r($value);
    // echo '====================================================================================';
    if (!empty($value)) {
        $run->runSQL($value);
    }
}
// print_r(explode(';', $file));