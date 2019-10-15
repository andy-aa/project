<?php

namespace App\Controller;

use App\Model\UsersModel;
use TexLab\MyDB\DB;
use App\Core\Conf;
use TexLab\MyDB\DbEntity;

class UsersController extends AbstractTableController
{
    protected $tableName = 'users';
    protected $viewPatternsPath = 'templates/table/';
    protected $pageSize = 3;
    
    public function __construct()
    {
        parent::__construct();
        $this->table = new UsersModel($this->tableName, DB::Link(Conf::MYSQL));
    }

    public function actionShowEditForm()
    {
        $tableUsersGroup = new DbEntity('user_group', DB::Link(Conf::MYSQL));
        
        $this->view->setPatternsPath('templates/usersTable/');
        $this->render("ShowEditForm", [
            'edit' => $this->table->get(['id' => $_GET['id']])[0],
            'EditURL' => '?t=' . $this->shortClassName() . '&a=Edit&id=' . $_GET['id'],
            'description' => $tableUsersGroup->getColumn('description')
        ]);
    }

}