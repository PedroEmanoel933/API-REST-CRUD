<?php
namespace Controller;

use Model\User;

class UserController{
    public function getUsers(){
        $user = new User();
        $users = $user->getUsers();
        
        if($users){
            // ENVIA A RESPOSTA EM Json
            header("Content-type: application/json");
            echo json_encode($users);
        } else{
            echo json_encode(['message' => 'Not users found']);
        }
    }

    // FUNÇÃO PARA CRIAR UM USUÁRIO
    public function creatUser(){
        // OBTÉM OS DADOS DO USUÁRIO, 
        // A RMAZENANDO OS DADOS QUE VEM DO input/teclado E DECODIFICA DE PHP PARA JSON
        $data = json_decode(json: file_get_contentes(filename: "php://input"));
        
        //VERIFICAR SE A VARIÁVEL NÃO ESTÁ VAZIA
        if(isset($data->name) && isset($data->email)){
            $user = new User();

            // COLOCANDO OQ FOI DIGITADO NO INPUT NA TABELA DO BANCO DE DADOS
            $user->name = $data->name;
            $user->email = $data->email;

            if($user->createUser()){
                echo json_decode(["message" => "User created sucessfully"]);
            } else{
                echo json_encode(["message"=> "Failed to create user"]);
            }
        } else {
            echo json_encode(["message"=> "Invalid Input"]);
        }
    }
}
?>