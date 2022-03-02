<?php
require('User.php');

$user1 = new User('ryan@gmail.com', '112233', 'admin');
$user2 = new User('jack@gmail.com', '441166', 'visiteur');

session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
if (filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {

    if ($_SESSION['email'] == $user1->getEmail() AND $_SESSION['password'] == $user1->getPassword() ){
        header('Location: account.php');
    } elseif($_SESSION['email'] != $user1->getEmail() AND $_SESSION['password'] != $user1->getPassword() ){
        echo "adresse ou mot de passe non valide";
    }
    if($_SESSION['email'] != $user2->getEmail() AND $_SESSION['password'] != $user2->getPassword()){
        header('Location: account.php');
    } elseif($_SESSION['email'] != $user2->getEmail() AND $_SESSION['password'] != $user2->getPassword()){
        echo "adresse ou mot de passe non valide";
    }
} else {
    echo "L'adresse email est invalide.";
}



?>