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

        // $existingUser= selectOne('users', ['email' => $user['email']]);
        // if($existingUser){
        //     array_push($errors, 'Email já existe');
        // }

        $existingUser= selectOne('users', ['email' => $user['email']]);
        if($existingUser){
            if(isset($user['update-user'])&& $existingUser['id'] != $user['id']){
                array_push($errors, 'Usuário já existe');
            }
            
            if(isset($user['create-admin'])){
                array_push($errors, 'Já existe um usuário com esse e-mail');
            }
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