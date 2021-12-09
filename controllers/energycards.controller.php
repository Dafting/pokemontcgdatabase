<?php

include_once('models/energycards.model.php');

class EnergyCardsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new EnergyCardsModel();
    }
    
    function addEnergyCard() {
        $type = $_REQUEST['type'];
        $special = $_REQUEST['special'];
        $description = $_REQUEST['description'];
        $card_id = $_REQUEST['card_id'];

        $this->model->insertCard($type, $special, $description, $card_id);
        header('Location: ' . BASE_URL);
    }
}