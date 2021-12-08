<?php

include_once('models/trainercards.model.php');
include_once('views/cards.view.php');

class TrainerCardsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new TrainerCardsModel();
        $this->view = new CardsView();
    }
    
    function addTrainerCard() {
        $description = $_REQUEST['description'];
        $card_id = $_REQUEST['card_id'];

        $this->model->insertCard($description, $card_id);
        header('Location: ' . BASE_URL);
    }
}