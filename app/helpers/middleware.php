<?php

function usersOnly($redirect = '/inicial.php'){
  if (empty($_SESSION['id'])){
    $_SESSION['message'] = "Você precisa estar logado";
    $_SESSION['type']= 'error';
    header('location: ' . BASE_URL . $redirect);
    exit(0);
  }
}

function adminOnly($redirect = '/inicial.php'){

    if (empty($_SESSION['id']) || empty($_SESSION['admin'])){
        $_SESSION['message'] = "Você não está autorizado";
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function guestOnly($redirect = '/inicial.php'){
    if(isset($_SESSION['id'])){
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}