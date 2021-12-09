<?php

include_once('models/trainercards.model.php');

class TrainerCardsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new TrainerCardsModel();
    }
    
    function addTrainerCard() {
        $description = $_REQUEST['description'];
        $card_id = $_REQUEST['card_id'];

        $this->model->insertCard($description, $card_id);
        header('Location: ' . BASE_URL);
    }
}