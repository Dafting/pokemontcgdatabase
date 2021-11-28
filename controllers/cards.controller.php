<?php

include_once('models/cards.model.php');
include_once('views/cards.view.php');

class CardsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new CardsModel();
        $this->view = new CardsView();
    }

    function showIndex() {
        $this->view->showIndex();
    }

    function showAddCards() {
        $this->view->showAddCards();
    }

    function addCard() {
        $name = $_REQUEST['name'];
        $type = $_REQUEST['type'];
        $expansion = $_REQUEST['expansion'];
        $expNumber = $_REQUEST['expNumber'];
        $rarity = $_REQUEST['rarity'];
    
        $card_id = $this->model->insertCard($name, $type, $expansion, $expNumber, $rarity);

        if($type = 1) {
            $this->view->showAddPokeCard($card_id);
        } elseif ($type = 2) {
            $this->view->showAddTrainerCard($card_id);
        } elseif ($type = 3) {
            //$this->view->showAddEnergyCard();
        }
    }
}