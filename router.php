<?php

require_once './controllers/cards.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = 'listar';
}
$params = explode('/', $action);

$controller = new CardsController();
switch ($params[0]){
    // case 'listar':
    // $controller->showCards();
    // break;
    // case 'insertar':
    //     $controller->AgregarSneakers();
    //     break;
    // case 'borrar':
    //     $controller->BorrarSneakers($params[1]);
    //     break;
    // case 'editar_sneaker':
    //     $controller->AbrirMenuEdicion($params[1]);
    //     break;
    // case 'editar':
    //     $controller->EditarSneakers();
    //     break;
    default:
        $controller->showCards();
    break;
}