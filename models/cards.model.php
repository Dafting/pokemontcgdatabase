<?php

class CardsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pokemontcgdb;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllCards() {
        $query = $this->db->prepare('SELECT * FROM cards ORDER BY expNumber ASC');
        $query->execute();
    
        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getAllCardsByType($type) {
        $query = $this->db->prepare('SELECT * FROM cards WHERE type = :type');
        $query->execute([':type' => $type]);

        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getAllCardsByExpansion($expansion) {
        $query = $this->db->prepare('SELECT * FROM cards WHERE expansion = :expansion');
        $query->execute([':expansion' => $expansion]);

        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getACard($id) {
        $query = $this->db->prepare('SELECT * FROM cards WHERE id = :id');
        $query->execute(['id' => $id]);

        $singleCard = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleCard;
    }

    function insertCard($name, $type, $expansion, $expNumber, $rarity, $imageDir){
    
        $query = $this->db->prepare('INSERT INTO cards (name, type, expansion, expNumber, rarity, image) VALUES (?, ?, ?, ?, ?, ?)');
        $query->execute([$name, $type, $expansion, $expNumber, $rarity, $imageDir]);
    
        return $this->db->lastInsertId();
    }

    function deleteCard($id) {
        $query = $this->db->prepare('DELETE FROM cards WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    function updateCard($id, $name, $type, $rarity, $expansion, $expNumber){
        $query = $this->db->prepare('UPDATE cards SET name = :name, type = :type, rarity = :rarity, expansion = :expansion, expNumber = :expNumber WHERE id = :id');
        $query->execute(['id' => $id, 'name' => $name, 'type' => $type, 'rarity' => $rarity, 'expansion' => $expansion, 'expNumber' => $expNumber]);
    }
}