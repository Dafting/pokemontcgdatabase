<?php

class LoginModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=pokemontcgdatabase.cluster-c5ws9nysreug.us-east-2.rds.amazonaws.com;'.'dbname=pokemontcgdb;charset=utf8', 'admin', 'estoEsUnaPrueba3000');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getUser($username) {
        $query = $this->db->prepare('SELECT * FROM users WHERE username = :username');
        $query->execute(['username' => $username]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function registerUser($username, $password_hash) {
        $query = $this->db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
        $query->execute(['username' => $username, 'password' => $password_hash]);
    }
}