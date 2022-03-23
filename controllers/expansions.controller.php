<?php

include_once('models/expansions.model.php');
include_once('controllers/login.controller.php');

class ExpansionsController {
    private $model;
    private $view;
    private $loginController;

    public function __construct() {
        $this->model = new ExpansionsModel();
        $expansions = $this->model->getAllExpansions();
        $this->view = new CardsView($expansions);
        $this->loginController = new LoginController();
    }

    function addExpansion() {
        $this->loginController->checkIfAdmin();
        $name = $_REQUEST['name'];
        $imageDir = $_FILES['input_name']['name'];
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png") {
            $target_dir = "img/expansions/" . uniqid("", true);
            $target_file = $target_dir . basename($_FILES["input_name"]["name"]);
            $uploadOk = 1;
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["input_name"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    // echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["input_name"]["size"] > 500000) {
                // echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                // echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["input_name"]["tmp_name"], $target_file)) {
                    // echo "The file ". basename( $_FILES["input_name"]["name"]). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
            }
        }
        $this->model->addExpansion($name, $target_file);
        header("Location: " . BASE_URL . "showAllExpansions");
    }

    function deleteExpansion($id) {
        $this->loginController->checkIfAdmin();
        $this->model->deleteExpansion($id);
        header("Location: " . BASE_URL . "showAllExpansions");
    }

    function getExpansionNames($expansionId) {
        foreach($expansions as $expansion) {
            if($expansion['id'] == $expansionId) {
                return $expansion['name'];
            }
        }
    }

    function showExpansions() {
        $expansions = $this->model->getAllExpansions();
        $this->view->showExpansions($expansions);
    }

    function showAddExpansion() {
        $this->view->showAddExpansion();
    }

    function showEditExpansion($id) {
        $expansion = $this->model->getExpansion($id);
        $this->view->showEditExpansion($expansion);
    }

    function listExpansions() {
        $this->loginController->checkIfAdmin();
        $expansions = $this->model->getAllExpansions();
        $this->view->listExpansions($expansions);
    }

    function editExpansion($id) {
        $this->loginController->checkIfAdmin();
        $name = $_REQUEST['name'];

        $this->model->editExpansion($id, $name, $target_file);
        header("Location: " . BASE_URL . "showAllExpansions");
    }
}