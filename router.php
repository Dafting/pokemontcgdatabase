<?php

require_once './controllers/cards.controller.php';
require_once './controllers/login.controller.php';
require_once './controllers/pokecards.controller.php';

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
$loginController = new LoginController();

switch ($params[0]) {
    case 'listar':
        $cardsController->showIndex();
    break;
    case 'admin':
        $cardsController->showAddCards();
    break;
    case 'addCard':
        $cardsController->addCard();
    break;
    case 'addPokemonCard':
        $pokeCardController->addPokeCard();
    break;
    default:
        $cardsController->showIndex();
    break;
}