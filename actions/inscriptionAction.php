<?php
require('actions/database.php');

if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
    if (isset($_POST["email"]) && isset($_POST["pwd"])) {
        //formulaire complet ->
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $pwd = htmlspecialchars($_POST['pwd']);
        $email = htmlspecialchars($_POST['email']);
        //verif existance ->
        $verifExist = $bdd->prepare("SELECT name from users WHERE email = ? OR name = ?");
        $verifExist->execute(array($email, $prenom));
        if ($verifExist->rowCount() > 0) {
            //Email/login dejà existent 
            $error_Msg = "user deja existant";
            $error_id = 1;
            header('location:signup.php?notif=' . $error_id);
            // die();
        } else {
            //Insertion de user ->
            $insertUser = $bdd->prepare("INSERT INTO users (name, login, mdp, email) VALUES (?,?,?,?)");
            $insertUser->execute(array($nom, $prenom, $pwd, $email));
        }
    } else {
        $error_Msg = "champs email/pwd incomplet";
        $error_id = 1;
        header('location:signup.php?notif=' . $error_id);
    }
} else {
}
