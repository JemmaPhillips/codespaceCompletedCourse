<?php # LOGIN HELPER FUNCTIONS.

// NavBar
include 'navbar.php';

# Open database connection.
require ( 'connect_db.php' ) ;

function validate($link, $email = '', $pwd = '') {
    # Initialize errors array.
    $errors = array();

    # Check email field.
    if (empty($email)) {
        $errors[] = 'Enter your email address.';
    } else {
        $e = mysqli_real_escape_string($link, trim($email));
    }

    # Check password field.
    if (empty($pwd)) {
        $errors[] = 'Enter your password.';
    } else {
        $p = mysqli_real_escape_string($link, trim($pwd));
    }

    # On success retrieve user_id, first_name, and last name from 'users' database.
    if (empty($errors)) {
        $q = "SELECT user_id, first_name, last_name FROM users WHERE email='$e' AND pass=SHA2 ('$p', 256)";
        $r = mysqli_query($link, $q);
        if (!$r) {
            # Query execution failed, handle the error
            $errors[] = 'Database query failed: ' . mysqli_error($link);
        } elseif (mysqli_num_rows($r) == 1) {
            $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
            return array(true, $row);
        } else {
            # No matching user found
            $errors[] = 'Email address and password not found.';
        }
    }
    # On failure retrieve error message/s.
    return array(false, $errors);
}
