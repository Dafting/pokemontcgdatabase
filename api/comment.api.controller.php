<?php
require_once("./models/comments.model.php");
require_once("./api/json.view.php");

class CommentController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new CommentsModel();
        $this->view = new JSONView();
    }

    private function getBody()
    {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }

    public function getComment($id) {
        $comment = $this->model->getComment($id[':ID']);
        $this->view->response($comment, 200);
    }

    public function getAllComments($params = null) {
        $tareas = $this->model->getAllComments();
        $this->view->response($tareas, 200);
    }

    public function getCommentsByCardId($params = null) {
        $id = $params[':CARD_ID'];
        $comments = $this->model->getCommentsByCardId($id);
        $this->view->response($comments, 200);
    }

    public function getCommentsByCardIdAsc($params = null) {
        $id = $params[':CARD_ID'];
        $comments = $this->model->getCommentsByCardIdAsc($id);
        $this->view->response($comments, 200);
    }

    public function getCommentsByCardIdDesc($params = null) {
        $id = $params[':CARD_ID'];
        $comments = $this->model->getCommentsByCardIdDesc($id);
        $this->view->response($comments, 200);
    }

    public function getCommentsByCardIdFiltered($params = null) {
        $id = $params[':CARD_ID'];
        $score = $params[':SCORE'];
        $comments = $this->model->getCommentsByCardIdFiltered($id, $score);
        $this->view->response($comments, 200);
    }

    public function createComment($params = null)
    {
        session_start();
        if ($_SESSION['username'] == null) {
            $this->view->response("Unauthorized", 401);
            return;
        }
        $data = $this->getBody();

        $score = $data->score;
        $comment = $data->comment;
        $id_card = $data->cardId;
        $idComment = $this->model->createComment($comment, $score, $id_card);
        $comment = $this->model->getComment($idComment);

        if ($comment) {
            $this->view->response($comment, 200);
        } else {
            $this->view->response("Some error occured, the comment was not created.", 500);
        }
    }

    public function deleteComment($params = null) {
        session_start();
        if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] == false) {
            $this->view->response("Forbidden", 403);
            return;
        }
        $id = $params[':ID'];
        $this->model->deleteComment($id);
        $this->view->response("Comment with id {$id} was created!", 200);
    }
}
