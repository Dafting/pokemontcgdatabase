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

    function showCard($id) {
        $card = $this->cardModel->getACard($id);
        switch ($card[0]->type) {
            case 1:
                $cardDetails = $this->pokeModel->getACard($id);
                break;
            case 2:
                $cardDetails = $this->trainerModel->getACard($id);
                break;
            case 3:
                $cardDetails = $this->energyModel->getACard($id);
                break;
            default:
                echo "Error";
            break;
        }
        $this->view->showCard($card, $cardDetails);
    }

    function showEditCard($id) {
        $card = $this->cardModel->getACard($id);
        switch ($card[0]->type) {
            case 1:
                $cardDetails = $this->pokeModel->getACard($id);
                break;
            case 2:
                $cardDetails = $this->trainerModel->getACard($id);
                break;
            case 3:
                $cardDetails = $this->energyModel->getACard($id);
                break;
            default:
                echo "Error";
            break;
        }
        $this->view->showEditCard($card, $cardDetails);
    }

    function editCard($id) {
        $name = $_REQUEST['name'];
        $newType = $_REQUEST['type'];
        $expansion = $_REQUEST['expansion'];
        $expNumber = $_REQUEST['expNumber'];
        $rarity = $_REQUEST['rarity'];

        $oldType = $this->cardModel->getACard($id)[0]->type;

        if ($oldType != $newType) {
            $this->view->showConfirmEditCard($id, $oldType, $newType);
            return;
        }

        $this->cardModel->updateCard($id, $name, $type, $rarity, $expansion, $expNumber);

        // switch ($type) {
        //     case 1:
        //         $this->view->showAddPokeCard($id);
        //         break;
        //     case 2:
        //         $this->view->showAddTrainerCard($id);
        //         break;
        //     case 3:
        //         $this->view->showAddEnergyCard($id);
        //         break;
        //     default:
        //         echo "Error";
        //     break;
        // }

        header("Location: " . BASE_URL . "admin/listCards");
    }
}