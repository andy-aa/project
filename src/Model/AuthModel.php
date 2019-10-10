<?php

namespace App\Model;

use TexLab\MyDB\Runner;

class AuthModel extends Runner
{

    public function getUserData(string $login, string $pass) : ?array
    {

$sql = <<<SQL
SELECT users.login, users.pass, users.name, users.surname, user_group.cod, user_group.description FROM `users`,`user_group` WHERE user_group.id = users.user_group_id AND users.login = '$login' AND users.pass = '$pass';
SQL;

        return $this->runSQL($sql)[0];
    }
}