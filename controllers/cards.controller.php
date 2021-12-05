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
        /*$image = $_FILES['imageToUpload']['name'];

        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png") {
            $target_dir = "img/cards/";
            $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["imageToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["imageToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }*/
    
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
                echo "Error in showCard()";
                var_dump($card);
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
                echo "Error in showEditCard()";
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

        function parseImageField($image) {
            if(substr($image, 0, 3) != "http") {
                $image = BASE_URL . $image;
            }
            return $image;
        }
    }
}