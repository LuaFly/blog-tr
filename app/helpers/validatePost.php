<?php 

function validatePost($post){
    $errors = array();

        if(empty($post['title'])){
            array_push($errors, 'Titulo é obrigatório');
        }
        if(empty($post['body'])){
            array_push($errors, 'texto é obrigatório');
        }
        if(empty($post['topic_id'])){
            array_push($errors, 'Por gentileza escolha um tópico');
        } 

        $existingPost= selectOne('posts', ['title' => $post['title']]);
        if($existingPost){
            if(isset($post['update-post'])&& $existingPost['id'] != $post['id']){
                array_push($errors, 'Já existe um post com esse título');
            }
            
            if(isset($post['add-post'])){
                array_push($errors, 'Já existe um post com esse título');
            }
        }
    return $errors;
}

?>