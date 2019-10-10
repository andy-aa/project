<?php

namespace App\Controller;

use TexLab\MyDB\Table;
use TexLab\MyDB\DB;
use App\Core\Conf;

abstract class AbstractTableController extends AbstractController
{
    protected $table;
    protected $viewPatternsPath = 'templates/table/';

    public function __construct()
    {
        parent::__construct();
        $this->table = new Table("user_group", DB::Link(Conf::MYSQL));
    }

    public function actionShow()
    {
        $this->render("show", [
            'table' => $this->table->get()
        ]);
    }
}
