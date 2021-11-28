<?php

class CardsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pokemontcgdb;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllCards() {
        $query = $this->db->prepare('SELECT * FROM cards');
        $query->execute();
    
        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getACard($id) {
        $query = $this->db->prepare('SELECT * FROM cards WHERE id = :id');
        $query->execute(['id' => $id]);

        $singleCard = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleCard;
    }

    function insertCard($name, $type, $expansion, $expNumber, $rarity){
    
        $query = $this->db->prepare('INSERT INTO cards (name, type, expansion, expNumber, rarity) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$name, $type, $expansion, $expNumber, $rarity]);
    
        return $this->db->lastInsertId();
    }

    function deleteCard($id) {
        $query = $this->db->prepare('DELETE FROM cards WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    function updateCard($id, $name, $type, $expansion, $expNumber){
        $query = $this->db->prepare('UPDATE cards SET name = :name, type = :type, expansion = :expansion, expNumber = :expNumber WHERE id = :id');
        $query->execute(['id' => $id, 'name' => $name, 'type' => $type, 'expansion' => $expansion, 'expNumber' => $expNumber]);
    }
}