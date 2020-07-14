<?php 

function validateUser($user){
    $errors = array();

        if(empty($user['username'])){
            array_push($errors, 'Nome é obrigatório');
        }
        if(empty($user['email'])){
            array_push($errors, 'E-mail é obrigatório');
        }
        if(empty($user['password'])){
            array_push($errors, 'Senha é obrigatório');
        } 
        if($user['passwordConf'] !== $user['password']){
            array_push($errors, 'As senhas não são iguais');
        }

        $existingUser= selectOne('users', ['email' => $user['email']]);
        if(isset($existingUser)){
            array_push($errors, 'Email já existe');
        }
    return $errors;
}

function validateLogin($user){
    $errors = array();

        if(empty($user['username'])){
            array_push($errors, 'Nome é obrigatório');
        }
        
        if(empty($user['password'])){
            array_push($errors, 'Senha é obrigatório');
        } 
        
    return $errors;
}