<?php

require_once './controllers/cards.controller.php';
require_once './controllers/login.controller.php';
require_once './controllers/pokecards.controller.php';
require_once './controllers/trainercards.controller.php';
require_once './controllers/energycards.controller.php';
require_once './controllers/expansions.controller.php';
require_once './views/cards.view.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . '443' . dirname($_SERVER['PHP_SELF']));

/* datos de conexión a la base de datos */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pokemontcgdb');

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
$expansionsController = new ExpansionsController();
$cardsView = new CardsView(NULL);

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
                case 'addExpansion':
                    $expansionsController->addExpansion();
                break;
                case 'listExpansions':
                    $expansionsController->listExpansions();
                break;
                default:
                    $cardsController->showAdmin();
                break;
            }
        }
    break;
    case 'search':
        $cardsController->searchCards();
    break;
    case 'viewCard':
        if(!empty($params[1])){
            $cardsController->showCard($params[1]);
        } else {
            header('Location: ' . BASE_URL);
        }
    break;
    case 'editCard':
        if(!empty($params[1])){
            $cardsController->editCard($params[1]);
        } else {
            header('Location: ' . BASE_URL);
        }
    break;
    case 'editPokemonCard':
        if(!empty($params[1])){
            $pokeCardController->editPokemonCard($params[1]);
        } else {
            header('Location: ' . BASE_URL);
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
    case 'showAllCards':
        $cardsController->showAllCards();
    break;
    case 'byCategories':
        if(!empty($params[1])){
            $cardsController->showCardsByType($params[1]);
        } else {
            header('Location: ' . BASE_URL);
        }
    break;
    case 'byExpansion':
        if(!empty($params[1])){
            $cardsController->showCardsByExpansion($params[1]);
        } else {
            header('Location: ' . BASE_URL);
        }
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