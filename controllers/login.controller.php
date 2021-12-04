<?php

include_once('models/login.model.php');
include_once('views/login.view.php');

class LoginController {
    private $model;
    private $view;

    public function __construct() {
        // $this->model = new CardsModel();
        $this->view = new LoginView();
        $this->model = new LoginModel();
    }

    function showLogin() {
        $this->view->showLogin();
    }

    function showRegister() {
        $this->view->showRegister();
    }

    function verifyLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $loginData = $this->model->getUser($username);

        if ($loginData[0]['username'] == $username && password_verify ($password, $loginData[0]['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $loginData[0]['id'];
            header('Location: ' . BASE_URL . 'admin');
        } else {
            $this->view->showLoginFail();
        }
    }

    function registerUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->model->registerUser($username, $hash);

        header('Location: ' . BASE_URL);
    }
}