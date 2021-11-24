<?php

// include_once('models/cards.model.php');
include_once('views/cards.view.php');

class CardsController {
    private $model;
    private $view;

    public function __construct() {
        // $this->model = new CardsModel();
        $this->view = new CardsView();
    }

    function showCards() {
        $this->view->showCards();
    }
}