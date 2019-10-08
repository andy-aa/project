<?php

namespace App\Controller;

class  SiteController extends AbstractController
{
    //use AuthTrait;
    public function actionAbout()
    {
        $this->render("about", [
            'title' => "About",
            'about' => ""
        ]);
    }
    public function actionHome()
    {
        $this->render("home", [
            'title' => "Home"
        ]);
    }
}
