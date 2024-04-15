<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method="post">
        <label for="num1">First number:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Second number:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label for="operator">Select operation:</label>
        <select name="operator" id="operator">
            <option style="font-size:150%" value="+"> +</option>
            <option style="font-size:150%" value="-"> -</option>
            <option style="font-size:150%" value="*"> *</option>
            <option style="font-size:150%" value="/"> /</option>
        </select>
        <br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        
      // Perform the selected operation
    if ($operator === '+') {
        $result = $num1 + $num2;
    } elseif ($operator === '-') {
        $result = $num1 - $num2;
    } elseif ($operator === '*') {
        $result = $num1 * $num2;
    } elseif ($operator === '/') {
        if ($num2 !== 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Division by zero error";
        }
    } else {
        $result = "Invalid operation";
    }

        // Display the result
        echo "<h3>Result:</h3>";
        echo "<p>{$num1} {$operator} {$num2} = {$result}</p>";
    }
    ?>
</body>
</html>
