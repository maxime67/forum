<?php
require("includes/functions.php");
$_SESSION['connect'] = true;
$_SESSION['iduser'] = getUser($email)[0];
$_SESSION['name'] = getUser($email)[1];
$_SESSION['login'] = getUser($email)[2];
$_SESSION['email'] = getUser($email)[4];
