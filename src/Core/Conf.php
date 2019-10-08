<?php

namespace App\Core;

class Conf
{
    const MYSQL_DB = 'eshop';
    const MYSQL_HOST = 'localhost';
    const MYSQL_USER = 'root';
    const MYSQL_PASS = '';
    const DEFAULT_CONTROLLER = 'Site';
    const DEFAULT_ACTION = 'Home';
    const DEFAULT_PLAIN_LAYOUT = 'templates/_layouts/plainLayout.php';
    const DEFAULT_LAYOUT = 'templates/_layouts/mainLayout.php';
    const DEFAULT_PATTERNS_PATH = 'templates/site/';
    const CLEAN_URL = true;
}
