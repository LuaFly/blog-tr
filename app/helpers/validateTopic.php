<?php 

function validateTopic($topic){
    $errors = array();

        if(empty($topic['name'])){
            array_push($errors, 'Nome é obrigatório');
        }
        

        // $existingTopic= selectOne('topics', ['name' => $topic['name']]);
        // if($existingTopic){
        //     array_push($errors, 'Topico já existe');
        // }

        $existingTopic= selectOne('topics', ['name' => $post['name']]);
        if($existingTopic){
            if(isset($post['update-topic'])&& $existingTopic['id'] != $post['id']){
                array_push($errors, 'Topico já existe');
            }
            
            if(isset($post['add-topic'])){
                array_push($errors, 'Já existe um tópico com esse título');
            }
        }
    return $errors;
}