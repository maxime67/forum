<?php
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == true) {
    } else {
        $error_Msg = "non connecté";
        $error_id = 2;
        header('location:signup.php?notif=' . $error_id);
    }
} else {
    $error_Msg = "non connecté";
    $error_id = 42;
    header('location:signup.php?notif=' . $error_id);
}
