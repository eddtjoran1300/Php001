<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        form { margin: 20px auto; width: 300px; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        input, select { width: 100%; padding: 8px; margin: 5px 0; }
        button { padding: 10px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2> Calculator</h2>
    <form action="" method="POST">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
            <option value="exponent">Exponentiation </option>
            <option value="percentage">Percentage (%)</option>
            <option value="sqrt">Square Root (First Number)</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
                break;
            case 'exponent':
                $result = pow($num1, $num2);
                break;
            case 'percentage':
                $result = ($num1 / 100) * $num2;
                break;
            case 'sqrt':
                $result = sqrt($num1);
                break;
            default:
                $result = "Invalid operation";
        }
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
