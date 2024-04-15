<?php
# PROCESS LOGIN ATTEMPT.
// NavBar
include 'navbar.php';

# Check form submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # Open database connection.
    require('connect_db.php');

    # Get connection and validate functions.
    require('login_tools.php');

    # Check login.
    list($check, $data) = validate($link, $_POST['email'], $_POST['pass']);

    # On success set session data and redirect to home page.
    if ($check) {
        # Access session.
        session_start();
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['first_name'] = $data['first_name'];
        $_SESSION['last_name'] = $data['last_name'];
         # Redirect to home page
    header('Location: home.php');
    
}

    # Or on failure set errors.
    else {
        $errors = $data;
    }

    # Close database connection.
    mysqli_close($link);
}

# Continue to display login page on failure.
include('login.php');
?>
