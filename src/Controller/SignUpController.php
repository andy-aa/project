<?php

namespace App\Controller;

use App\Model\UsersModel;
use TexLab\MyDB\DB;
use App\Core\Conf;
use TexLab\MyDB\DbEntity;
use TexLab\MyDB\Table;

class SignUpController extends AbstractController
{
    protected $viewPatternsPath = 'templates/signup/';

    public function actionShowForm()
    {


        $this->render("showForm", [
            // 'columnsNames' => $this->table->getColumnsNames(),
            // 'editValues' => $this->table->get(['id' => $_GET['id']])[0],
            'SignUpURL' => '?t=' . $this->shortClassName() . '&a=checkNewUser',
            'newSignUpDate' => $_SESSION['newSignUpDate'] ?? [],
            'SignUpError' => $_SESSION['SignUpError'] ?? '',

            // 'tableHeaders' => $this->table->getColumnsComments()
        ]);
    }
    public function actionCheckNewUser()
    {
        if ($_POST['pass'] != $_POST['passrepeat']) {
            $_SESSION['newSignUpDate'] = $_POST;
            $_SESSION['SignUpError'] = "пароли не совпадают";
            $this->redirect('?t=' . $this->shortClassName() . '&a=showform');
        }

        $userGroupId = (new Table('user_group', DB::Link(Conf::MYSQL)))->get(['cod' => 'dft'])[0]['id'];



        (new Table('users', DB::Link(Conf::MYSQL)))->add([
            "name" => $_POST["name"],
            "surname" => $_POST["surname"],
            "login" => $_POST["login"],
            "pass" => $_POST["pass"],
            "user_group_id" => $userGroupId
        ]);
        $this->redirect('?a=loginform');
    }
}
