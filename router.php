<?php

require_once './controllers/cards.controller.php';
require_once './controllers/login.controller.php';
require_once './controllers/pokecards.controller.php';
require_once './controllers/trainercards.controller.php';
require_once './controllers/energycards.controller.php';
require_once './controllers/expansions.controller.php';
require_once './controllers/users.controller.php';
require_once './views/cards.view.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

/* datos de conexión a la base de datos */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pokemontcgdb');

session_start();

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
$usersController = new UsersController();

function deleteQuery($path) {
    $path = explode('&', $path);
    return $path[0];
}

switch ($params[0]) {
    /* Este case es de pruebas, usar solo para tal fin. */
    case 'testing':
    break;
    case 'error':
        $cardsView->showError($params[1]);
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
                case 'listUsers':
                    $usersController->listUsers();
                break;
                case 'deleteUser':
                    $usersController->deleteUser($params[2]);
                break;
                case 'toggleAdmin':
                    $usersController->toggleAdmin($params[2]);
                break;
                case 'listCards':
                    $cardsController->listCards();
                break;
                case 'deleteCard':
                    $cardsController->deleteCard($params[2]);
                break;
                case 'deleteCardImg':
                    $cardsController->deleteCardImg($params[2]);
                break;
                case 'editCard':
                    $cardsController->showEditCard($params[2]);
                break;
                case 'editCardImg':
                    $cardsController->showEditCardImg($params[2]);
                break;
                case 'addExpansion':
                    $expansionsController->showAddExpansion();
                break;
                case 'listExpansions':
                    $expansionsController->listExpansions();
                break;
                case 'deleteExpansion':
                    $expansionsController->deleteExpansion($params[2]);
                break;
                case 'editExpansion':
                    $expansionsController->showEditExpansion($params[2]);
                break;
                default:
                    header('Location: ' . BASE_URL . "admin");
                break;
            }
        }
    break;
    case 'search':
        $cardsController->searchCards();
    break;
    case 'editCardImg':
        $cardsController->editCardImg($params[1]);
    break;
    case 'showAdvancedSearch':
        $cardsController->showAdvancedSearchCards();
    break;
    case 'advancedSearch':
        $cardsController->advancedSearch();
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
            $pokeCardController->editPokeCard($params[1]);
        } else {
            header('Location: ' . BASE_URL);
        }
    break;
    case 'editExpansion':
        if(!empty($params[1])){
            $expansionsController->editExpansion($params[1]);
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
    case 'addNewExpansion':
        $expansionsController->addExpansion();
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
    case 'login':
        $loginController->showLogin();
    break;
    case 'logout':
        $loginController->logout();
    break;
    case 'register':
        $loginController->showRegister();
    break;
    case 'verifyLogin':
        $loginController->verifyLogin();
    break;
    case 'verifyRegister':
        $loginController->registerUser();
    break;
    case 'showAllExpansions':
        $expansionsController->showExpansions();
    break;
    default:
        $cardsController->showIndex();
    break;
}