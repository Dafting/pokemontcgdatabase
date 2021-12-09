<?php

include_once('models/cards.model.php');
include_once('models/energycards.model.php');
include_once('models/pokecards.model.php');
include_once('models/trainercards.model.php');
include_once('models/expansions.model.php');
include_once('views/cards.view.php');

class CardsController {
    private $model;
    private $view;

    public function __construct() {
        $this->cardModel = new CardsModel();
        $this->pokeModel = new PokecardsModel();
        $this->energyModel = new EnergycardsModel();
        $this->trainerModel = new TrainercardsModel();
        $this->expansionModel = new ExpansionsModel();
        $this->view = new CardsView();
    }

    function showIndex() {
        $lastCards = $this->cardModel->getAllCards();
        $lastCards = array_reverse($lastCards);

        $expansions = $this->expansionModel->getAllExpansions();

        foreach($lastCards as $key=>$card) {
            foreach($expansions as $key2=>$expansion) {
                if($card->expansion == $expansions[$key2]->id) {
                    $card->expansion = $expansions[$key2]->name;
                }
            }
        }

        $this->view->showIndex($lastCards);
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
        $image = $_FILES['input_name']['name'];

        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png") {
            $target_dir = "img/cards/" . uniqid("", true);
            $target_file = $target_dir . basename($_FILES["input_name"]["name"]);
            $uploadOk = 1;

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["input_name"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    // echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["input_name"]["size"] > 500000) {
                // echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                // echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["input_name"]["tmp_name"], $target_file)) {
                    // echo "The file ". basename( $_FILES["input_name"]["name"]). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    
        $card_id = $this->cardModel->insertCard($name, $type, $expansion, $expNumber, $rarity, $target_file);

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
                echo "Error in addCard()";
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
                echo "Error in deleteCard()";
            break;
        }

        $this->cardModel->deleteCard($id);
        $this->view->showAdmin();

        header("Location: " . BASE_URL . "admin/listCards");
    }

    function listCards() {
        $cards = $this->cardModel->getAllCards();
        foreach($cards as $card) {
            switch($card->type) {
                case 1:
                    $cardDetails = $this->pokeModel->getACardByCardId($card->id);
                    if ($cardDetails == null) {
                        $card->error = "bg-danger";
                    }
                    break;
                case 2:
                    $cardDetails = $this->trainerModel->getCard($card->id);
                    if ($cardDetails == null) {
                        $card->error = "bg-danger";
                    }
                    break;
                case 3:
                    $cardDetails = $this->energyModel->getCard($card->id);
                    if ($cardDetails == null) {
                        $card->error = "bg-danger";
                    }
                    break;
                default:
                    echo "Error in listCards()";
                break;
            }
        }
        $this->view->listCards($cards);
    }

    function showCard($id) {
        $card = $this->cardModel->getACard($id);
        if ($card == null) {
            //TODO: Hacer un mejor error
            echo ("No se ha encontrado la carta");
            // $this->view->showError("No se ha encontrado la carta");
            return;
        }

        switch ($card[0]->type) {
            case 1:
                $cardDetails = $this->pokeModel->getACardByCardId($id);
                break;
            case 2:
                $cardDetails = $this->trainerModel->getACard($id);
                break;
            case 3:
                $cardDetails = $this->energyModel->getACard($id);
                break;
            default:
                echo "Error in showCard()";
            break;
        }

        if ($cardDetails == null) {
            echo ("Carta trunca! Hay información perdida. Contacte al administrador.");
            return;
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
                echo "Error in showEditCard()";
            break;
        }
        $this->view->showEditCard($card, $cardDetails);
    }

    function editCard($id) {

        if (isset($_REQUEST['name'])) {
            $name = $_REQUEST['name'];
            $newType = $_REQUEST['type'];
            $expansion = $_REQUEST['expansion'];
            $expNumber = $_REQUEST['expNumber'];
            $rarity = $_REQUEST['rarity'];
        } else {
            die("Error: No se han recibido los datos");
        }

        $oldType = $this->cardModel->getACard($id)[0]->type;

        if ($oldType != $newType) {
            $this->view->showConfirmEditCard($id, $oldType, $newType);
            return;
        }

        $this->cardModel->updateCard($id, $name, $newType, $rarity, $expansion, $expNumber);

        switch ($newType) {
            case 1:
                $card = $this->pokeModel->getACardByCardId($id);
                $this->view->showEditPokeCard($id, $card[0]->type, $card[0]->hp, $card[0]->stage, $card[0]->evolvesFrom, $card[0]->attackName1, $card[0]->attackDesc1, $card[0]->attackDamage1, $card[0]->attackEnergies1, $card[0]->attackName2, $card[0]->attackDesc2, $card[0]->attackDamage2, $card[0]->attackEnergies2, $card[0]->hasPokePower, $card[0]->pokePowerName, $card[0]->pokePowerDesc, $card[0]->weakness, $card[0]->resistance, $card[0]->retreatCost, $card[0]->pokedexInfo);
                break;
            case 2:
                $card = $this->trainerModel->getCard($id);
                $this->view->showEditTrainerCard($id);
                break;
            case 3:
                $this->view->showEditEnergyCard($id);
                break;
            default:
                echo "Error";
            break;
        }

        // header("Location: " . BASE_URL . "admin/listCards");
    }

    function showAllCards() {
        $cards = $this->cardModel->getAllCards();
        $expansions = $this->expansionModel->getAllExpansions();
        $this->view->showAllCards($cards, $expansions);
    }

    function showCardsByType($type) {
        switch($type) {
            case 'pokemon':
                $cards = $this->cardModel->getAllCardsByType(1);
                $expansions = $this->expansionModel->getAllExpansions();
                $this->view->showAllCards($cards, $expansions);
                break;
            case 'entrenador':
                $cards = $this->cardModel->getAllCardsByType(2);
                $expansions = $this->expansionModel->getAllExpansions();
                $this->view->showAllCards($cards, $expansions);
                break;
            case 'energia':
                $cards = $this->cardModel->getAllCardsByType(3);
                $expansions = $this->expansionModel->getAllExpansions();
                $this->view->showAllCards($cards, $expansions);
                break;
            default:
                echo "Error in showCardsByType()";
            break;
        }
    }
}