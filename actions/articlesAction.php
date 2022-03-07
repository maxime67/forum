<?php
//  DATA
require('actions/database.php');
$artAll = $bdd->prepare("SELECT * from articles");
$art = $artAll->execute();
$artlist = ($artAll->fetchAll());
?>
<div class="card-group">


    <!-- BOUCLE -->
    <?php
    // for($a = 0; $a < 1; $a++){
    for ($i = 0; $i < count($artlist); $i++) {
    ?>
        <!-- CARD -->
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo ($artlist[$i]['IMG']) ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo ($artlist[$i]['DESCR']) ?></h5>
                <p class="card-text"><?php echo ($artlist[$i]['DESCR']) ?></p>
                <a href="#" class="btn btn-primary"><?php echo ($artlist[$i]['PRICE'] . "€") ?></a>
            </div>
        </div>
        <?php
        $p = array('3', '6');
        if (in_array($i, $p)) { ?>
</div>
<div class="card-group">

<?php } ?>

<!-- FIN BOUCLE -->

<?php } //} 
?>

</div>