<!doctype html>
<html lang="en">

<?php
// NavBar
include 'navbar.php';

# Open database connection.
require('connect_db.php');
?>

<div class="container-fluid">
<form action="login_action.php" method="post">
  <div class="form-group">
	<label for="inputemail">Email</label>
	<input type="text" name="email" class="form-control" required placeholder="* Enter Email"> 
  </div>
  <div class="form-group">
	<input type="password" name="pass"  class="form-control" required placeholder="* Enter Password"></p>
  </div>
	<input type="submit" class="btn btn-dark btn-lg btn-block" value="Login" ></p>
</form>
</div>



</html>