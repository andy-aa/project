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
            'controllerName' => $this->shortClassName(),
            'tableHeaders' => $this->table->getColumnsComments()
        ]);
    }

    public function actionDelete()
    {
        $this->table->del(['id' => $_GET['id']]);
        $this->redirect('?t=' . $this->shortClassName() . '&a=show');
    }

    public function actionShowEditForm()
    {
        $this->render("ShowAddEditForm", [
            'columnsNames' => $this->table->getColumnsNames(),
            'editValues' => $this->table->get(['id' => $_GET['id']])[0],
            'URL' => '?t=' . $this->shortClassName() . '&a=Edit&id=' . $_GET['id'],
            'tableHeaders' => $this->table->getColumnsComments()
        ]);
    }

    public function actionShowAddForm()
    {
        $this->render("ShowAddEditForm", [
            'columnsNames' => $this->table->getColumnsNames(),
            'URL' => '?t=' . $this->shortClassName() . '&a=Add',
            'tableHeaders' => $this->table->getColumnsComments()
        ]);
    }

    public function actionEdit()
    {
        $this->table->edit(['id' => $_GET['id']], $_POST);
        $this->redirect('?t=' . $this->shortClassName() . '&a=show');
    }

    public function actionAdd()
    {
        $this->table->add($_POST);
        $this->redirect('?t=' . $this->shortClassName() . '&a=show');
    }
}
