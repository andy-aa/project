<?php

namespace App\Controller;

use App\Core\Conf;
use App\View\View;
use ReflectionClass;

abstract class AbstractController
{
    protected $view;
    protected $viewLayout = Conf::DEFAULT_LAYOUT;
    protected $viewPatternsPath = Conf::DEFAULT_PATTERNS_PATH;
    public function __construct()
    {
        ($this->view = new View())
            ->setLayout($this->viewLayout)
            ->setPatternsPath($this->viewPatternsPath);
    }
    public function render($viewName, $viewData = [])
    {
        $this->view->render($viewName, $viewData);
    }
    public function redirect($location)
    {
        header("Location: " . $location);
        exit();
    }
    public function accessDenied()
    {
        header('HTTP/1.0 403 Forbidden');
    }
    public function notFound()
    {
        header("HTTP/1.0 404 Not Found");
    }
    public function redirectToRoot()
    {
        $this->redirect(pathinfo($_SERVER['REQUEST_URI'])['dirname']);
    }
    public function shortClassName()
    {
        return strtolower(preg_replace('/Controller$/', '', (new ReflectionClass($this))->getShortName()));
    }
    public function shortCurrentActionName()
    {
        return strtolower(preg_replace('/^action/', '', debug_backtrace()[1]['function']));
    }
}
