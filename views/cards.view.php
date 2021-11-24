<?php

require_once('libs/Smarty.class.php');

class CardsView {
         
    private $smarty;
    
    function __construct() {
        $this->smarty = new Smarty();
    }
    
    function showCards() {
        // $this->smarty->assign('cards', $cards);
        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/intro.tpl');
        $this->smarty->display('templates/showCards.tpl');
    }
}