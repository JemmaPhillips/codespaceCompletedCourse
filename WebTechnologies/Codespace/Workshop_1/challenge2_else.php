<!DOCTYPE html>
<html>
<head>
    <title>Age Checker</title>
</head>
<body>
    <h2>How old are you?</h2>
    <form method="post">
        <label for="age">Enter your age:</label>
        <input type="number" name="age" id="age" required>
        <input type="submit" name="submit" value="Check Age">
        
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        $age = $_POST['age'];

        echo "</br>";

        // Check the value of $age and display a message based on the age group
        if ($age < 13) {
            echo "<h3>You are a child.</h3>";
        } elseif ($age >= 13 && $age <= 17) {
            echo "<h3>You are a teenager.</h3>";
        } elseif ($age >= 18 && $age <= 64) {
            echo "<h3>You are an adult.</h3>";
        } else {
            echo "<h3>You are a senior citizen.</h3>";
        }
    }
    ?>
</body>
</html>
