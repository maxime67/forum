<?php
function getUser($email){
require('actions/database.php');
    $getUser = $bdd->prepare("SELECT * from users WHERE email = ?");
    $getUser->execute(array($email));
    $getUser = $getUser->fetchAll();
    return $getUser;
}