<?php

include_once('models/expansions.model.php');

class ExpansionsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ExpansionsModel();
        $this->view = new CardsView();
    }
    
    /*function addTrainerCard() {
        $description = $_REQUEST['description'];
        $card_id = $_REQUEST['card_id'];

        if(isset($description)) {
            $description = str_replace("{", "<span class='tcg-symbol'>", $description);
            $description = str_replace("}", "</span>", $description);
        }

        $this->model->insertCard($description, $card_id);
        header('Location: ' . BASE_URL);
    }*/

    function getExpansionNames($expansionId) {
        $expansions = $this->model->getAllExpansions();
        foreach($expansions as $expansion) {
            if($expansion['id'] == $expansionId) {
                return $expansion['name'];
            }
        }
    }
}