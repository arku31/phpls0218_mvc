<?php

namespace App;

class Users extends MainController
{
    public function index()
    {
        echo "users index";
    }

    public function create()
    {
        echo "User create interface";
    }

    public function nelza($id, $id2)
    {
        echo 'nelzia';
    }

    public function showUserList()
    {
        $users_model = new User();
        $users = $users_model->all();

        for ($i = 0; $i < count($users); $i++) {
            $users[$i] = $users[$i] . "changed";
        }

        $data['users'] = $users;
        $data['username'] = 'Igor';
        $this->view->render('users/userlist', $data);
    }

    public function showFirstUser()
    {

        $users_model = new User();
        $user = $users_model->first();

        $data['user'] = $user;

        $this->view->render('users/userfirst', $data);
    }

    public function login()
    {
        session_start();
        $valid_user = ['a' => 'b'];
        $login = $_GET['login'];
        $pwd = $_GET['pwd'];

        if ($valid_user == [$login => $pwd]) {
            echo 'auth ok';
            $_SESSION['AUTH'] = 1;
        } else {
            echo 'failed auth';
        }
    }

    public function personalArea()
    {
        session_start();
        if (isset($_SESSION['AUTH']) && $_SESSION['AUTH'] == 1) {
            print_r($_SESSION);
            echo 'valid';
        } else {
            header('Location: /');
        }
    }
}