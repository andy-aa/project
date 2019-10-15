<?php

namespace App\Controller;

class FeedBackController extends AbstractTableController
{
    protected $tableName = 'feedbacktable';
    protected $viewPatternsPath = 'templates/table/';
    protected $pageSize = 4;
}