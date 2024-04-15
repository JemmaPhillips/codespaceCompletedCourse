<!DOCTYPE html>
<html lang="en">

<!--NavBar -->
<?php include 'navbar.php'; ?>
<br>

<style>

form{
  margin-left: 150px;
  margin-right: 150px;
}


</style>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	</head>
  <body>
    
  <?php # DISPLAY COMPLETE REGISTRATION PAGE.
#include ( 'includes/reg-heading.html' ) ;
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 
  
  
  # Initialize an error array.
  $errors = array();

  # Check for a first name.
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for a last name.
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }

  # Check for an email address:
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

  # Check for a password and matching input passwords.
  if ( !empty($_POST[ 'pass1' ] ) )
  {
    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }
  
  # Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM users WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a class="alert-link" href="login.php">Sign In Now</a>' ;
  }
  

  # On success register user inserting into 'users' database table.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO users (first_name, last_name, email, pass, reg_date) 
	VALUES ('$fn', '$ln', '$e', '$p', NOW() )";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<div class="container">
			<div class="alert alert-secondary" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				
				<h4 class="alert-heading"Registered!</h4>
				<p>You are now registered.</p>
				<a class="alert-link" href="login.php">Login</a>'; }
  
    # Close database connection.
    mysqli_close($link); 

    exit();
  }
  # Or report errors.
  else 
  {
    echo '<div class="container">
			<div class="alert alert-secondary" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<h4 class="alert-heading" id="err_msg">The following error(s) occurred:</h4>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo '<p>or please try again.</p></div>';
    # Close database connection.
    mysqli_close( $link );
  }  
}
?>

  
<div class="container">
  <!--HTML Register Form -->
   
	<div class="row">
      <div class="col-sm">
		<div class="card bg-light mb-3">
		  <div class="card-header"><h1>Create Account</h1></div>
			<div class="card-body">
			<form action="register.php" method="post">
			<div class="row">
				<div class="col">
				<div class="form-group">
				  <label for="inputfirst_name">First Name</label>
				  <input type="text" name="first_name" class="form-control" required placeholder="* First Name " value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"> 
				</div>
				</div><!--closing col-->
				<div class="col">
				<div class="form-group">
				  <label for="inputlast_name">Last Name</label>
				  <input type="text" name="last_name" class="form-control" required placeholder="* Last Name" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
				</div>
				</div><!--closing col-->
			</div><!--closing row-->
				<div class="form-group">
				  <label for="inputemail">Email</label>
				  <input type="email" name="email" class="form-control" required placeholder="* email@example.com" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
					
				</div>
				<small id="emailHelp" class="form-text text-muted">*We'll never share your email with anyone else.</small>
				<br>
				<div class="row">
				  <div class="col">
					 <div class="form-group">
					  <label for="inputpass1">Create New Password</label>
					  <input type="password" name="pass1" class="form-control" required placeholder="* Create New Password" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>">
					 </div>
				  </div><!-- closing col-->
				  <div class="col">
					 <div class="form-group">
						<label for="inputpass2">Confirm Password</label>
						<input type="password" name="pass2" class="form-control" required placeholder="* Confirm Password" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>">
					 </div>
				  </div><!--closing col-->
				</div><!-- closing row -->
				<hr>
				<p>By creating an account you agree to our <a href="Terms.php">Terms & Privacy</a>.</p>
				<input type="submit" class="btn btn-dark btn-lg btn-block" value="Create Account Now"></p>
		</form><!-- closing form -->
			</div><!-- closing card header -->
		</div><!-- closing card -->
	  </div><!-- closing col -->
	</div><!-- closing row -->
	  </div><!-- closing container -->				
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
  </body>
</html>