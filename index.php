<?php
require_once __DIR__ . '/vendor/autoload.php';

use Controller\UserController;
$userController = new UserController();

// ARMAZENA O MÉTODO HTTP
$method = $_SERVER['REQUEST_METHOD'];

// VERIFICAR O MÉTODO E EXECUTAR UMA AÇÃO
switch ($method) {
    case 'GET':
        $userController->getUsers();
        break;
    case 'POST':
        $userController->createUsers();
        break;
    default:
        // ENVIA UM TEXTO EM FORMATO json 
        echo json_encode(['message' => "Method not allowed"]);
        break;
}
?>