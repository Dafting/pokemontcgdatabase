<?php

include_once('models/energycards.model.php');
include_once('views/cards.view.php');

class EnergyCardsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new EnergyCardsModel();
        $this->view = new CardsView();
    }
    
    function addEnergyCard() {
        $type = $_REQUEST['type'];
        $special = $_REQUEST['special'];
        $description = $_REQUEST['description'];
        $card_id = $_REQUEST['card_id'];
        //$image = $_REQUEST['image'];
    
        $this->model->insertCard($type, $special, $description, $card_id);
        header('Location: ' . BASE_URL);
    }
}