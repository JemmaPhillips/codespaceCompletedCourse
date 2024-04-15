

<?php
// NavBar
include 'navbar.php';

# Open database connection.
require('connect_db.php');

# Display any error messages if present.
if (isset($errors) && !empty($errors)) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<p id="err_msg">Oops! There was a problem:<br>';
    foreach ($errors as $msg) {
        echo " - $msg<br>";
    }
    echo 'Please try again or <a class="alert-link" href="register.php">Register</a></p>
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
  </div>';
}
?>

<style>
    form {
        margin-left: 350px;
        margin-right: 350px;
    }
</style>

<body>
    <br>
    <div class="container-fluid">
        <form action="home.php" method="post">
            <div class="form-group">
                <label for="inputemail">Email</label>
                <input type="text" name="email" class="form-control" required placeholder="* Enter Email">
            </div>
            <div class="form-group">
                <input type="password" name="pass" class="form-control" required placeholder="* Enter Password"></p>
            </div>
            <input type="submit" class="btn btn-dark btn-lg btn-block" style="width: 350px;" value="Login">
        </form>
    </div>

</body>
</html>
