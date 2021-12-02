<?php

class TrainerCardsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pokemontcgdb;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllCards() {
        $query = $this->db->prepare('SELECT * FROM ');
        $query->execute();
    
        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getACard($id) {
        $query = $this->db->prepare('SELECT * FROM  WHERE id = :id');
        $query->execute(['id' => $id]);

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