<?php

class UsersModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host='. DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllUsers() {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();

        $users = $query->fetchAll(PDO::FETCH_OBJ);

        return $users;
    }

    function registerUser($username, $password_hash) {
        $query = $this->db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
        $query->execute(['username' => $username, 'password' => $password_hash]);
    }

    function getUser($id) {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    function getUserByUsername($username) {
        $query = $this->db->prepare('SELECT * FROM users WHERE username = :username');
        $query->execute(['username' => $username]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    function deleteUser($id) {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    function updateUser($id, $name, $isAdmin) {
        $query = $this->db->prepare('UPDATE users SET username = :username, isAdmin = :isAdmin WHERE id = :id');
        $query->execute(['username' => $name, 'isAdmin' => $isAdmin, 'id' => $id]);
    }
}