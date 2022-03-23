<?php
    require_once('./libs/Router.php');
    require_once('./api/comment.api.controller.php');

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'pokemontcgdb');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    $router->addRoute("/comments", "GET", "CommentController", "getAllComments");
    $router->addRoute("/comments/:ID", "GET", "CommentController", "getComment");
    $router->addRoute("/commentsByCard/:CARD_ID/", "GET", "CommentController", "getCommentsByCardId");
    $router->addRoute("/commentsByCard/:CARD_ID/ascOrder", "GET", "CommentController", "getCommentsByCardIdAsc");
    $router->addRoute("/commentsByCard/:CARD_ID/descOrder", "GET", "CommentController", "getCommentsByCardIdDesc");
    $router->addRoute("/commentsByCard/:CARD_ID/filterByScore/:SCORE", "GET", "CommentController", "getCommentsByCardIdFiltered");
    $router->addRoute("/comments/:ID", "DELETE", "CommentController", "deleteComment");
    $router->addRoute("/comments", "POST", "CommentController", "createComment");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
