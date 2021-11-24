<?php

// require_once './controllers/zapatillas.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = 'listar';
}
$params = explode('/', $action);

// $controller = new ZapatillasController();
switch ($params[0]){
    // case 'listar':
    //     $controller->ListarSneakers();
    //     break;
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
        echo '404 - pagina no encontrada';
        break;
}