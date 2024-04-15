<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session User Name Example</title>
</head>
<body>
    <?php
    // Check if the user's name is set in the session
    if (isset($_SESSION["user_name"])) {
        // Display the user's name
        echo "<h2>Welcome, " . htmlspecialchars($_SESSION["user_name"]) . "!</h2>";
    } else {
    ?>
        <form method="post">
            <label for="user_name">Enter your name:</label>
            <input type="text" name="user_name" id="user_name" required>
            <button type="submit">Submit</button>
        </form>
    <?php
    }
    ?>
    <style>
        h2 {
            padding-top: 40px;
            padding-bottom: 40px;
            text-align: center;
            color: #3C6373;
        }
    </style>
</body>
</html>


