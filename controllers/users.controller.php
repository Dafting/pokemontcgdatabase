<?php

include_once('models/users.model.php');    
include_once('views/users.view.php');
include_once('controllers/login.controller.php');

class UsersController {
    private $model;
    private $view;
    private $loginController;
    
    public function __construct() {
        $this->model = new UsersModel();
        $this->view = new UsersView();
        $this->loginController = new LoginController();
    }

    function listUsers() {
        $this->loginController->checkIfAdmin();
        $users = $this->model->getAllUsers();
        $this->view->showDeleteUsers($users);
    }

    function deleteUser($id) {
        $this->loginController->checkIfAdmin();
        $this->model->deleteUser($id);
        header('Location: ' . BASE_URL . 'admin/listUsers');
    }

    function toggleAdmin($id) {
        $this->loginController->checkIfAdmin();
        $user = $this->model->getUser($id);
        if($_SESSION['username'] != $user['username']) {
            if ($user['isAdmin'] == 1) {
                $this->model->updateUser($id, $user['username'], 0);
            } else {
                $this->model->updateUser($id, $user['username'], 1);
            }
        }

        header('Location: ' . BASE_URL . 'admin/listUsers');
    }
}