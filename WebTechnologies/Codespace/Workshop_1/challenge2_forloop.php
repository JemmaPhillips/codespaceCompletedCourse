<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <!-- gives the look of the site -->
    <h2>Multiplication Table</h2>
    <form method="post">  
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" name="submit" value="Generate Table">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        echo "<h3>Multiplication table of {$number}:</h3>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<li>{$number} x {$i} = {$result}</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
