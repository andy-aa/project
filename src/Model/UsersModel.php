<?php

namespace App\Model;

use TexLab\MyDB\DbEntity;

class UsersModel extends DbEntity
{

    public function getPage(?int $page = null): array
    {
        $this
        ->setSelect("`users`.`id`, `users`.`login`, `users`.`pass`, `users`.`name`, `users`.`surname`, `user_group`.`description` AS 'user_group_id'")
        ->setFrom("`user_group`, `users`")
        ->setWhere("`user_group`.`id` = `users`.`user_group_id`");
        return parent::getPage($page);
    }


}