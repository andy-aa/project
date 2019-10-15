<?php

namespace App\Controller;

class UserGroupController extends AbstractTableController
{
    protected $tableName = 'user_group';
    protected $viewPatternsPath = 'templates/table/';
    protected $pageSize = 2;
}