<?php

namespace App\Controller;

use TexLab\MyDB\DbEntity;
use TexLab\MyDB\DB;
use App\Core\Conf;

abstract class AbstractTableController extends AbstractController
{
    protected $table;
    protected $viewPatternsPath;
    protected $tableName;
    protected $pageSize;

    public function __construct()
    {
        parent::__construct();
        $this->table = new DbEntity($this->tableName, DB::Link(Conf::MYSQL));
    }

    public function actionShow()
    {

        $page = $_GET['page'] ?? 1;
        $table = $this->table->setPageSize($this->pageSize);
        $this->render("show", [
            'table' => $table->getPage($page),
            'pageCount' => $table->pageCount(),
            'paginationLink' => '?t=' . $this->shortClassName() . '&a=Show&page=',
            'currentPage' => $page,
            'controllerName' => $this->shortClassName()
        ]);
    }

    public function actionDelete()
    {
        $this->table->del(['id' => $_GET['id']]);
        $this->redirect('?t=' . $this->shortClassName() . '&a=show');
    }

    public function actionShowEditForm()
    {
        $this->render("ShowEditForm", [
            'edit' => $this->table->get(['id' => $_GET['id']])[0],
            'EditURL' => '?t=' . $this->shortClassName() . '&a=Edit&id=' . $_GET['id']
        ]);
    }

    public function actionEdit()
    {
        $this->table->edit(['id' => $_GET['id']], $_POST);
        $this->redirect('?t=' . $this->shortClassName() . '&a=show');
    }

    public function actionShowAddForm()
    {
        $this->render("ShowAddForm", [
            'ColumnsNames' => $this->table->getColumnsNames(),
            'AddURL' => '?t=' . $this->shortClassName() . '&a=Add'
        ]);
    }

    public function actionAdd()
    {
        $this->table->add($_POST);
        $this->redirect('?t=' . $this->shortClassName() . '&a=show');
    }
}
