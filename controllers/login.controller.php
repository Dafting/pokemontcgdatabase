<?php

include_once('models/users.model.php');
include_once('views/login.view.php');

class LoginController {
    private $model;
    private $view;

    public function __construct() {
        // $this->model = new CardsModel();
        $this->view = new LoginView();
        $this->model = new UsersModel();
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

        $loginData = $this->model->getUserByUsername($username);


        if (isset($loginData['username']) && $loginData['username'] == $username && password_verify ($password, $loginData['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $loginData['id'];
            $_SESSION['isAdmin'] = $loginData['isAdmin'];
            if ($loginData['isAdmin'] == 1) {
                header('Location: ' . BASE_URL . 'admin');
            } else {
                header('Location: ' . BASE_URL);
            }
            exit();
        } else {
            $this->view->showLoginFail();
        }

    }

    function registerUser() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hash = password_hash($password, PASSWORD_DEFAULT);

        if(!isset($this->model->getUser($username)[0]['username'])) {
            $this->model->registerUser($username, $hash);
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $loginData['id'];
            $_SESSION['isAdmin'] = $loginData['isAdmin'];
        } else {
            $this->view->showRegisterFail();
        }

        header('Location: ' . BASE_URL);
    }

    function logout() {
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL);
    }

    function checkSession(){
        if(!isset($_SESSION['username'])){
            header('Location: ' . BASE_URL . 'login');
            exit();
        }
    }
    
    function checkIfAdmin() {
        if(!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] == 0) {
            header('Location: ' . BASE_URL . 'error/403');
            exit();
        }
    }
}