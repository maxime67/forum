<?php
include('includes/head.php');
include('includes/navbar.php');
include('includes/notif.php');
?>
<form action='#' class='container' method='POST'>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input name="email" type="email" class="form-control">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input name="pwd" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href='page1.php'>
  <button class="btn btn-primary">page1</button>
</a>

<?php include('actions/signupAction.php'); ?>