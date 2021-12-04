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
        //$this->smarty->display('templates/showCards.tpl');
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

    function ShowCard($card, $cardDetails) {

        $this->smarty->assign('pokemonName', $card[0]->name);
        $this->smarty->assign('expansionName', $card[0]->expansion);

        switch ($card[0]->expansion) {
            case '1':
                $this->smarty->assign('expansionName', 'Base');
                break;
            case '2':
                $this->smarty->assign('expansionName', 'Jungla');
                break;
            case '3':
                $this->smarty->assign('expansionName', 'Fósil');
                break;
        }

        switch ($cardDetails[0]->stage) {
            case '0':
                $this->smarty->assign('stage', 'Pokémon Básico');
                break;
            case '1':
                $this->smarty->assign('stage', 'Etapa 1');
                break;
            case '2':
                $this->smarty->assign('stage', 'Etapa 2');
                break;
        }

        $this->smarty->assign('evolvesFrom', $cardDetails[0]->evolvesFrom);
        $this->smarty->assign('hp', $cardDetails[0]->hp);
        $this->smarty->assign('typeSymbol', $cardDetails[0]->type);

        // Datos del PokePower. Si no tiene, no se muestra nada.
        if (!isset($cardDetails[0]->pokePowerName)) {
            $this->smarty->assign('pokePowerHidden', 'd-none');
        } else {
            $this->smarty->assign('pokePowerHidden', '');
        }
        $this->smarty->assign('pokePowerName', $cardDetails[0]->pokePowerName);
        $this->smarty->assign('pokePowerDescription', $cardDetails[0]->pokePowerDesc);

        //Datos del primer ataque. Si no tiene, no se muestra nada.
        if ($cardDetails[0]->attackName1 == '') {
            $this->smarty->assign('attackHidden1', 'd-none');
        } else {
            $this->smarty->assign('attackHidden1', '');
        }
        $this->smarty->assign('attackName1', $cardDetails[0]->attackName1);
        $this->smarty->assign('attackDesc1', $cardDetails[0]->attackDesc1);
        $this->smarty->assign('attackDamage1', $cardDetails[0]->attackDamage1);
        $this->smarty->assign('attackEnergies1', $cardDetails[0]->attackEnergies1);

        //Datos del segundo ataque. Si no tiene, no se muestra nada.
        if ($cardDetails[0]->attackName2 == '') {
            $this->smarty->assign('attackHidden2', 'd-none');
        } else {
            $this->smarty->assign('attackHidden2', '');
        }
        $this->smarty->assign('attackName2', $cardDetails[0]->attackName2);
        $this->smarty->assign('attackDesc2', $cardDetails[0]->attackDesc2);
        $this->smarty->assign('attackDamage2', $cardDetails[0]->attackDamage2);
        $this->smarty->assign('attackEnergies2', $cardDetails[0]->attackEnergies2);

        if ($cardDetails[0]->weakness == '0') {
            $this->smarty->assign('weakness', '');
        } else {
            $this->smarty->assign('weakness', $cardDetails[0]->weakness);
        }
        
        if ($cardDetails[0]->resistance == '0') {
            $this->smarty->assign('resistance', '');
        } else {
            $this->smarty->assign('resistance', $cardDetails[0]->resistance);
        }

        $this->smarty->assign('retreatCost', $cardDetails[0]->retreatCost);
        $this->smarty->assign('pokedexText', $cardDetails[0]->pokedexInfo);

        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/showCard.tpl');
    }
}