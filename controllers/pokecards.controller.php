<?php

include_once('models/pokecards.model.php');
include_once('views/cards.view.php');

class PokeCardsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new PokeCardsModel();
        $this->view = new CardsView();
    }
    
    function addPokeCard() {
        $type = $_REQUEST['type'];
        $hp = $_REQUEST['hp'];
        $stage = $_REQUEST['stage'];
        $evolvesFrom = $_REQUEST['evolvesFrom'];
        $attackName1 = $_REQUEST['attackName1'];
        $attackDesc1 = $_REQUEST['attackDesc1'];
        $attackDamage1 = $_REQUEST['attackDamage1'];
        $attackEnergies1 = $_REQUEST['attackEnergies1'];
        $attackName2 = $_REQUEST['attackName2'];
        $attackDesc2 = $_REQUEST['attackDesc2'];
        $attackDamage2 = $_REQUEST['attackDamage2'];
        $attackEnergies2 = $_REQUEST['attackEnergies2'];
        $hasPokePower = $_REQUEST['hasPokePower'];
        $pokePowerName = $_REQUEST['pokePowerName'];
        $pokePowerDesc = $_REQUEST['pokePowerDesc'];
        $weakness = $_REQUEST['weakness'];
        $resistance = $_REQUEST['resistance'];
        $retreatCost = $_REQUEST['retreatCost'];
        $pokedexInfo = $_REQUEST['pokedexInfo'];
        $card_id = $_REQUEST['card_id'];
        //$image = $_REQUEST['image'];
    
        $this->model->insertCard($type, $hp, $stage, $evolvesFrom, $attackName1, $attackDesc1, $attackDamage1, $attackEnergies1, $attackName2, $attackDesc2, $attackDamage2, $attackEnergies2, $hasPokePower, $pokePowerName, $pokePowerDesc, $weakness, $resistance, $retreatCost, $pokedexInfo, $card_id);
        header('Location: ' . BASE_URL);
    }
}