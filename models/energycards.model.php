<?php

class EnergyCardsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pokemontcgdb;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllCards() {
        $query = $this->db->prepare('SELECT * FROM energy_card');
        $query->execute();
    
        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getACard($id) {
        $query = $this->db->prepare('SELECT * FROM energy_card WHERE id = :id');
        $query->execute(['id' => $id]);

        $singleCard = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleCard;
    }

    function insertCard($type, $special, $description, $card_id) {
        $query = $this->db->prepare('INSERT INTO energy_card (type, special, description, card_id) VALUES (:type, :special, :description, :card_id)');
        $query->execute(['type' => $type, 'special' => $special, 'description' => $description, 'card_id' => $card_id]);
    }


    function deleteCard($card_id) {
        $query = $this->db->prepare('DELETE FROM energy_card WHERE card_id = :card_id');
        $query->execute(['card_id' => $card_id]);
    }

    function updateCard($id, $type, $special, $description, $card_id) {
        $query = $this->db->prepare('UPDATE energy_card SET type = :type, special = :special, description = :description, card_id = :card_id WHERE id = :id');
        $query->execute(['type' => $type, 'special' => $special, 'description' => $description, 'card_id' => $card_id, 'id' => $id]);
    }
}