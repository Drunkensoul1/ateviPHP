<?php

    namespace application\controllers;

    use application\core\Controller;

    class AccountController extends Controller {

        public function loginAction(){
            // $this->view->redirect('/ateviphp/');
            $this->view->render('Вход');
            echo 'Login page';
        }

        public function registerAction(){
            $this->view->layout = 'registerLayout';
            $this->view->render('Регистрация');
            if (!empty($_POST) && 
            !empty($_POST['login']) &&
            !empty($_POST['password']) &&
            !empty($_POST['name']) &&
            !empty($_POST['email']
            )) {
                $regLogin = $_POST['login'];
                $regPassword = md5($_POST['password']);
                $regName = $_POST['name'];
                $regLastName = $_POST['lastname'];
                $regEmail = $_POST['email'];
                $this->model->registerNewUser($regLogin, $regLastName, $regName, $regPassword, $regEmail);
                return true;
            } else {
                echo 'ERROR';
                return false;
            }
        }

    }
