<?php

require_once './controllers/cards.controller.php';
require_once './controllers/login.controller.php';
require_once './controllers/pokecards.controller.php';
require_once './controllers/trainercards.controller.php';
require_once './controllers/energycards.controller.php';
require_once './views/cards.view.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = 'listar';
}
$params = explode('/', $action);

$cardsController = new CardsController();
$pokeCardController = new PokeCardsController();
$trainerCardController = new TrainerCardsController();
$energyCardController = new EnergyCardsController();
$loginController = new LoginController();
$cardsView = new CardsView();

switch ($params[0]) {
    case 'admin':
        if(empty($params[1])){
            $cardsController->showAdmin();
        }
        else {
            switch ($params[1]) {
                case 'addCard':
                    $cardsController->showAddCards();
                break;
                case 'listCards':
                    $cardsController->listCards();
                break;
                case 'deleteCard':
                    $cardsController->deleteCard($params[2]);
                break;
                default:
                    $cardsController->showAdmin();
                break;
            }
        }
    break;
    case 'addNewCard':
        $cardsController->addCard();
    break;
    case 'addNewPokemonCard':
        $pokeCardController->addPokeCard();
    break;
    case 'addNewTrainerCard':
        $trainerCardController->addTrainerCard();
    break;
    case 'addNewEnergyCard':
        $energyCardController->addEnergyCard();
    break;
    case 'testing':
        $cardsView->showPrueba();
    break;
    default:
        $cardsController->showIndex();
    break;
}