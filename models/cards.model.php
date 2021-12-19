<?php

class CardsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=pokemontcgdatabase.cluster-c5ws9nysreug.us-east-2.rds.amazonaws.com;'.'dbname=pokemontcgdb;charset=utf8', 'admin', 'estoEsUnaPrueba3000');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllCards($orderByLastAdded = false) {
        
        if ($orderByLastAdded) {
            $query = $this->db->prepare('SELECT * FROM cards');
        } else {
            $query = $this->db->prepare('SELECT * FROM cards ORDER BY `cards`.`expansion` ASC, `cards`.`expNumber` ASC');
        }
        $query->execute();
    
        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getAllCardsByType($type, $orderByLastAdded = false) {
        if ($orderByLastAdded) {
            $query = $this->db->prepare('SELECT * FROM cards WHERE `type` = :type');
        } else {
            $query = $this->db->prepare('SELECT * FROM cards WHERE `type` = :type ORDER BY `cards`.`expansion` ASC, `cards`.`expNumber` ASC');
        }
        $query->execute([':type' => $type]);

        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getAllCardsByExpansion($expansion, $orderByLastAdded = false) {
        if ($orderByLastAdded) {
            $query = $this->db->prepare('SELECT * FROM cards WHERE `expansion` = :expansion');
        } else {
            $query = $this->db->prepare('SELECT * FROM cards WHERE `expansion` = :expansion ORDER BY `cards`.`expNumber` ASC');
        }
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

    function searchCard($name) {
        $query = $this->db->prepare('SELECT * FROM cards WHERE `name` LIKE :name');
        $query->execute(['name' => '%'.$name.'%']);

        $cards = $query->fetchAll(PDO::FETCH_OBJ);

        return $cards;
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