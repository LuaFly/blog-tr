<?php


// session_start();

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$errors = array(); 
$username= '';
$email= '';
$password= '';
$passwordConf= '';

if(isset($_POST['register-btn'])){
  $errors = validateUser($_POST);

if (count($errors) === 0){
  unset($_POST['register-btn'], $_POST['passwordConf']);
  $_POST['admin'] = 0;

  $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $user_id = create('users', $_POST);
  $user = selectOne('users',['id' => $user_id]);

  //login
  $_SESSION['id'] = $user['id'];
  $_SESSION['username'] = $user['username'];
  $_SESSION['admin'] = $user['admin'];
  $_SESSION['admin'] = 'Você está logado';
  $_SESSION['type'] = 'sucesso';
  header('location: ' . BASE_URL . '/inicial.php');
  exit();

} else{
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $passwordConf= $_POST['passwordConf'];

}

}
?>