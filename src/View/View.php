<?php

namespace App\View;

class View
{
    public $viewName;
    public $viewData;
    public $layout;
    public $patternsPath;
    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }
    public function setPatternsPath($patternsPath)
    {
        $this->patternsPath = $patternsPath;
        return $this;
    }
    public function render($viewName, $viewData = [])
    {
        $this->viewName = $viewName;
        $this->viewData = $viewData;
        //        define('CLEAN_URL_PATH', str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']));
        extract($this->viewData);
        include __DIR__ . "/../../$this->layout";
    }
    public function body()
    {
        extract($this->viewData);
        include __DIR__ . "/../../{$this->patternsPath}{$this->viewName}.php";
    }
}
