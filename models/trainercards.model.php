<?php

class TrainerCardsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host='. DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllCards() {
        $query = $this->db->prepare('SELECT * FROM trainer_card');
        $query->execute();
    
        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getACard($card_id) {
        $query = $this->db->prepare('SELECT * FROM trainer_card WHERE card_id = :card_id');
        $query->execute(['card_id' => $card_id]);

        $singleCard = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleCard;
    }

    function insertCard($description, $card_id) {
        $query = $this->db->prepare('INSERT INTO trainer_card (description, card_id) VALUES (:description, :card_id)');
        $query->execute(['description' => $description, 'card_id' => $card_id]);
    }

    function deleteCard($card_id) {
        $query = $this->db->prepare('DELETE FROM trainer_card WHERE card_id = :card_id');
        $query->execute(['card_id' => $card_id]);
    }

    function updateCard($id, $description, $card_id) {
        $query = $this->db->prepare('UPDATE trainer_card SET description = :description, card_id = :card_id WHERE id = :id');
        $query->execute(['description' => $description, 'card_id' => $card_id, 'id' => $id]);
    }
}