<?php

class CommentsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host='. DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllComments() {
        $query = $this->db->prepare('SELECT * FROM comments');
        $query->execute();

        $comments = $query->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }

    function getComment($id) {
        $query = $this->db->prepare('SELECT * FROM comments WHERE id = :id');
        $query->execute(['id' => $id]);

        $singleComment = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleComment;
    }

    function getCommentsByCardId($id_card) {
        $query = $this->db->prepare('SELECT * FROM comments WHERE id_card = :id_card');
        $query->execute(['id_card' => $id_card]);

        $singleComment = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleComment;
    }
    
    function getCommentsByCardIdAsc($id_card) {
        $query = $this->db->prepare('SELECT * FROM comments WHERE id_card = :id_card ORDER BY score ASC');
        $query->execute(['id_card' => $id_card]);

        $singleComment = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleComment;
    }

    function getCommentsByCardIdDesc($id_card) {
        $query = $this->db->prepare('SELECT * FROM comments WHERE id_card = :id_card ORDER BY score DESC');
        $query->execute(['id_card' => $id_card]);

        $singleComment = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleComment;
    }

    function getCommentsByCardIdFiltered($id_card, $score) {
        $query = $this->db->prepare('SELECT * FROM comments WHERE id_card = :id_card AND score = :score');
        $query->execute(['id_card' => $id_card, 'score' => $score]);

        $singleComment = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleComment;
    }

    function deleteComment($id) {
        $query = $this->db->prepare('DELETE FROM comments WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    function createComment($comment, $score, $cardId) {
        $query = $this->db->prepare('INSERT INTO comments (comment, score, id_card) VALUES (:comment, :score, :id_card)');
        $query->execute(['comment' => $comment, 'score' => $score, 'id_card' => $cardId]);

        $id = $this->db->lastInsertId();

        return $id;
    }
}