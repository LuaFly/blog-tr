<?php

include(ROOT_PATH . "/app/database/db.php");

$table = 'topics';

$id = '';
$name = '';
$description = '';

$topics = selectAll($table);


if(isset($_POST['add-topic'])){
    unset($_POST['add-topic']);
    $topic_id = create('topics', $_POST);
    $_SESSION['message'] = 'tópico criado com sucesso';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}


if(isset($_GET['id'])){
    $id= $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_POST['update-topic'])){
    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic = update($table, $id, $_POST);
    $_SESSION['message'] = 'tópico editado com sucesso';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}
?>