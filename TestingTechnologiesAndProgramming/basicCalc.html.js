<!doctype html>
<html lang="en">
<head>
    <title>Calculator</title>
    <style>
        .calculator {
            width: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 0 auto;
            text-align: center;
        }
        input[type="button"] {
            width: 50px;
            height: 50px;
            margin: 5px;
            font-size: 20px;
        }
        input[type="text"] {
            width: 100%;
            height: 50px;
            font-size: 24px;
            text-align: right;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" disabled>
        <br>
        <input type="button" value="1" onclick="appendToDisplay('1')">
        <input type="button" value="2" onclick="appendToDisplay('2')">
        <input type="button" value="3" onclick="appendToDisplay('3')">
        <input type="button" value="+" onclick="appendToDisplay('+')">
        <br>
        <input type="button" value="4" onclick="appendToDisplay('4')">
        <input type="button" value="5" onclick="appendToDisplay('5')">
        <input type="button" value="6" onclick="appendToDisplay('6')">
        <input type="button" value="-" onclick="appendToDisplay('-')">
        <br>
        <input type="button" value="7" onclick="appendToDisplay('7')">
        <input type="button" value="8" onclick="appendToDisplay('8')">
        <input type="button" value="9" onclick="appendToDisplay('9')">
        <input type="button" value="*" onclick="appendToDisplay('*')">
        <br>
        <input type="button" value="0" onclick="appendToDisplay('0')">
        <input type="button" value="." onclick="appendToDisplay('.')">
        <input type="button" value="/" onclick="appendToDisplay('/')">
        <input type="button" value="C" onclick="clearDisplay()">
        <br>
        <input type="button" value="=" onclick="calculate()">
    </div>

    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function calculate() {
            const expression = document.getElementById('display').value;
            if (!expression) {
                alert('Please enter a valid expression');
                return;
            }

            try {
                const result = eval(expression);
                document.getElementById('display').value = result;
            } catch (error) {
                alert('Error in expression');
            }
        }
    </script>
</body>
</html>
