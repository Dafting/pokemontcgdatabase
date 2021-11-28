<?php

// include_once('models/cards.model.php');
include_once('views/login.view.php');

class LoginController {
    private $model;
    private $view;

    public function __construct() {
        // $this->model = new CardsModel();
        $this->view = new LoginView();
    }

    function showAddCard() {
        $this->view->showAddCard();
    }
}