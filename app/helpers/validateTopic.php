<?php 

function validateTopic($topic){
    $errors = array();

        if(empty($topic['name'])){
            array_push($errors, 'Nome é obrigatório');
        }
        

        $existingTopic= selectOne('topics', ['name' => $topic['name']]);
        if($existingTopic){
            array_push($errors, 'Topico já existe');
        }
    return $errors;
}