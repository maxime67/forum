<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
    Starbucks
  </a>
  <?php
  if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == true) { ?>
      <a href='page1.php'>
        <button class="btn btn-outline-primary" type="button">Produits</button>
      </a>
      <a href='inscription.php'>
        <button class="btn btn-sm btn-outline-primary" type="button">Panier</button>
      </a>
      <a href='inscription.php'>
        <button class="btn btn-sm btn-outline-primary" type="button">Paramètres</button>
      </a>
      <a href='disconnect.php'>
        <button class="btn btn-sm btn-outline-primary" type="button">Mon Compte</button>
      </a>
    <?php }
  } else { ?>
    <a href='signup.php'>
      <button class="btn btn-outline-primary" type="button">Se Connecter</button>
    </a>
    <a href='inscription.php'>
      <button class="btn btn-sm btn-outline-primary" type="button">S'inscrire</button>
    </a>
  <?php } ?>
</nav>