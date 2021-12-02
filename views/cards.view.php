<?php

require_once('libs/Smarty.class.php');

class CardsView {
         
    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }
    
    function showIndex() {
        // $this->smarty->assign('cards', $cards);
        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/intro.tpl');
        $this->smarty->display('templates/showCards.tpl');
    }

    function showAddCards() {
        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/addCards.tpl');
    }

    function showAddPokeCard($card_id) {
        $this->smarty->assign('card_id', $card_id);

        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/addPokeCard.tpl');
    }

    function showAddTrainerCard($card_id) {
        $this->smarty->assign('card_id', $card_id);

        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/addTrainerCard.tpl');
    }

    function showAddEnergyCard($card_id) {
        $this->smarty->assign('card_id', $card_id);

        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/addEnergyCard.tpl');
    }

    function showAdmin() {
        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/admin.tpl');
    }

    function listCards($cards) {
        $this->smarty->display('templates/header.tpl');
        echo('<h3 class="mt-2 mb-2">Lista de cartas en la base de datos</h3>');
        foreach ($cards as $card) {
            $this->smarty->assign('cardName', $card->name);
            switch ($card->type) {
                case '1':
                    $this->smarty->assign('cardType', 'Pokémon');
                    break;
                case '2':
                    $this->smarty->assign('cardType', 'Entrenador');
                    break;
                case '3':
                    $this->smarty->assign('cardType', 'Energía');
                    break;
            }
            switch ($card->rarity) {
                case '1':
                    $this->smarty->assign('cardRarity', 'Común');
                    break;
                case '2':
                    $this->smarty->assign('cardRarity', 'Infrecuente');
                    break;
                case '3':
                    $this->smarty->assign('cardRarity', 'Rara');
                    break;
            }
            switch ($card->expansion) {
                case '1':
                    $this->smarty->assign('cardExpansion', 'Base');
                    break;
                case '2':
                    $this->smarty->assign('cardExpansion', 'Jungla');
                    break;
                case '3':
                    $this->smarty->assign('cardExpansion', 'Fósil');
                    break;
            }
            $this->smarty->assign('cardId', $card->id);
            $this->smarty->display('templates/listCard.tpl');
        }
    }

    function ShowPrueba() {

        $this->smarty->assign('pokemonName', 'Charizard');
        $this->smarty->assign('expansionName', 'Base');
        $this->smarty->assign('stage', 'Etapa 2');
        $this->smarty->assign('evolvesFrom', 'Charmeleon');
        $this->smarty->assign('hp', '120');
        $this->smarty->assign('typeName', 'Fuego');
        $this->smarty->assign('typeSymbol', 'r');
        $this->smarty->assign('pokePowerName', 'Quema de Energía');
        $this->smarty->assign('pokePowerDescription', 'Quema una cantidad de energía de la carta al rival');

        // reservado para los ataques

        $this->smarty->assign('weakness', 'w');
        $this->smarty->assign('resistance', 'f');
        $this->smarty->assign('retreatCost', 'ccc');
        $this->smarty->assign('pokedexText', 'Texto de la Pokédex');

        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/prueba.tpl');
    }
}