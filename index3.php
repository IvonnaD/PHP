<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP Calculator</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #000009;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff99f;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="number"], select, input[type="submit"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Simple Calculator</h2>

    <form method="post">
        <label for="num1">First Number:</label>
        <input type="number" id="num1" name="num1" required>
        
        <label for="num2">Second Number:</label>
        <input type="number" id="num2" name="num2" required>
        
        <label for="operation">Operation:</label>
        <select id="operation" name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input values and selected operation
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Perform the selected operation
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                $operation_text = "Addition";
                break;
            case "subtract":
                $result = $num1 - $num2;
                $operation_text = "Subtraction";
                break;
            case "multiply":
                $result = $num1 * $num2;
                $operation_text = "Multiplication";
                break;
            case "divide":
                if ($num2 == 0) {
                    $result = "Error: Division by zero";
                } else {
                    $result = $num1 / $num2;
                }
                $operation_text = "Division";
                break;
            default:
                $result = "Error: Invalid operation";
                break;
        }

        // Display the result
        echo "<div class='result'>Result of $operation_text: $result</div>";
    }
    ?>

</div>

</body>
</html>
