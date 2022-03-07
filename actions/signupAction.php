<?php
require('actions/database.php');
// var_dump($_POST);
if (isset($_POST['email']) && isset($_POST['pwd'])) {
    $mdp = htmlspecialchars($_POST['pwd']);
    $email = htmlspecialchars($_POST['email']);

    // $checkExist = $bdd->prepare("SELECT name from users where email = ?");
    // $checkExist->execute(array($email));

    $checkCombinaison = $bdd->prepare("SELECT name from users where email = ? AND mdp = ?");
    $checkCombinaison->execute(array($email, $mdp));

    //si requête ramène 1 résultat
    if ($checkCombinaison->rowCount() > 0) {
        session_destroy();
        //Connecté !
        $_SESSION['connect'] = true;
        // var_dump($_SESSION);
    } else {
        //Error
        $error_Msg = "combinaison incorrect";
        $error_id = 1;
        header('location:signup.php?notif=' . $error_id);
    }
} 







//**
// isset($_POST['pwd']) ramène tj true car = chaine de caractère vide
//*/

// else {
//     $error_Msg = "Champs non complétés";
// }
