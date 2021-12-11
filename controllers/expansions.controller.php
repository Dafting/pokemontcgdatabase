<?php

include_once('models/expansions.model.php');

class ExpansionsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ExpansionsModel();
        $expansions = $this->model->getAllExpansions();
        $this->view = new CardsView($expansions);
    }

    function addExpansion($name, $imageDir) {
        $this->model->addExpansion($name, $imageDir);
        $this->view->showExpansions();
    }

    function listExpansions() {
        $this->view->showExpansions();
    }

    function getExpansionNames($expansionId) {
        foreach($expansions as $expansion) {
            if($expansion['id'] == $expansionId) {
                return $expansion['name'];
            }
        }
    }
}