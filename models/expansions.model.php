<?php

class ExpansionsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host='. DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllExpansions() {
        $query = $this->db->prepare('SELECT * FROM expansions');
        $query->execute();
    
        $expansions = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $expansions;
    }

    function getExpansion($expansion) {
        $query = $this->db->prepare('SELECT * FROM expansions WHERE id = :id');
        $query->execute(['id' => $id]);

        $expansion = $query->fetchAll(PDO::FETCH_OBJ);

        return $expansion;
    }

    function addExpansion($name, $imageDir) {
        $query = $this->db->prepare('INSERT INTO expansions (name, image) VALUES (?, ?)');
        $query->execute([$name, $imageDir]);
    }

    function deleteCard($id) {
        $query = $this->db->prepare('DELETE FROM expansions WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    function updateCard($id, $name) {
        $query = $this->db->prepare('UPDATE expansions SET name = :name WHERE id = :id');
        $query->execute(['name' => $name, 'id' => $id]);
    }
}