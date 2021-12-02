<?php

include_once('models/cards.model.php');
include_once('models/energycards.model.php');
include_once('models/pokecards.model.php');
include_once('models/trainercards.model.php');
include_once('views/cards.view.php');

class CardsController {
    private $model;
    private $view;

    public function __construct() {
        $this->cardModel = new CardsModel();
        $this->pokeModel = new PokecardsModel();
        $this->energyModel = new EnergycardsModel();
        $this->trainerModel = new TrainercardsModel();
        $this->view = new CardsView();
    }

    function showIndex() {
        $this->view->showIndex();
    }

    function showAddCards() {
        $this->view->showAddCards();
    }

    function showAdmin() {
        $this->view->showAdmin();
    }

    function addCard() {
        $name = $_REQUEST['name'];
        $type = $_REQUEST['type'];
        $expansion = $_REQUEST['expansion'];
        $expNumber = $_REQUEST['expNumber'];
        $rarity = $_REQUEST['rarity'];
    
        $card_id = $this->cardModel->insertCard($name, $type, $expansion, $expNumber, $rarity);

        switch ($type) {
            case 1:
                $this->view->showAddPokeCard($card_id);
                break;
            case 2:
                $this->view->showAddTrainerCard($card_id);
                break;
            case 3:
                $this->view->showAddEnergyCard($card_id);
                break;
            default:
                echo "Error";
            break;
        }
    }

    function deleteCard($id) {
        $deletedCard = $this->cardModel->getACard($id);

        switch($deletedCard[0]->type) {
            case 1:
                $this->pokeModel->deleteCard($id);
                break;
            case 2:
                $this->trainerModel->deleteCard($id);
                break;
            case 3:
                $this->energyModel->deleteCard($id);
                break;
            default:
                echo "Error";
            break;
        }

        $this->cardModel->deleteCard($id);
        $this->view->showAdmin();

        header("Location: " . BASE_URL . "admin/listCards");
    }

    function listCards() {
        $cards = $this->cardModel->getAllCards();
        $this->view->listCards($cards);
    }
}