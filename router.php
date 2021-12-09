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
    /* Este case es de pruebas, usar solo para tal fin. */
    case 'testing':
    break;
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
                case 'editCard':
                    $cardsController->showEditCard($params[2]);
                break;
                default:
                    $cardsController->showAdmin();
                break;
            }
        }
    break;
    case 'viewCard':
        $cardsController->showCard($params[1]);
    break;
    case 'editCard':
        $cardsController->editCard($params[1]);
    break;
    case 'editPokemonCard':
        $pokeCardController->editPokeCard($params[1]);
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
    case 'showAllCards':
        $cardsController->showAllCards();
    break;
    case 'register':
        $loginController->registerUser();
    break;
    case 'verify':
        $loginController->verifyLogin();
    break;
    default:
        $cardsController->showIndex();
    break;
}