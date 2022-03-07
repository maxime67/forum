<?php

if (isset($_GET['notif'])) {
    $error = $_GET['notif'];
?>
    <div class="alert alert-primary" role="alert">
        Erreur : <?php echo ($error) ?>
    </div>
<?php } ?>