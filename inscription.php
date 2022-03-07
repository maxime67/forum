<?php
      include('includes/head.php'); 
      include('includes/navbar.php'); 
      include('includes/notif.php'); 
      ?>
      <br>
      <form action='#' method='POST'>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="nom" placeholder="Nom">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="prenom" placeholder="Prénom">
    </div>
  </div>
  <br>
  <div class="mb-3">
    <label class="form-label">addresse E-mail</label>
    <input name="email" type="email" class="form-control">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label class="form-label">Mot de passe</label>
    <input name="pwd" class="form-control">
  </div>
  <div style="text-align:center">
  <button type="submit" class="btn btn-outline-primary">S'inscrire</button>
</div>
</form>
<?php 
include('actions/inscriptionAction.php');
?>
