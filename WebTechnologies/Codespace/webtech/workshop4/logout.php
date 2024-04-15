<?php
// NavBar
include 'navbar.php';

# Open database connection.
require('connect_db.php');

session_start();
session_unset();
session_destroy();

header('Location: login.php');
exit;
?>