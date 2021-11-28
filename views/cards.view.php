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
}