<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post">
        <label>Enter number 1 :</label>
        <input type="number" name="num1">  <br> <br>

        <label>Enter number 2 :</label>
        <input type="number" name="num2"> <br><br>

        <label>Select Operation:</label>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        
        <br><br>
        <input type="submit" value="Calculate"> <br> <br>
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            
            if ($operation == "add") {
                $result = $num1 + $num2;
            } elseif ($operation == "subtract") {
                $result = $num1 - $num2;
            } elseif ($operation == "multiply") {
                $result = $num1 * $num2;
            } elseif ($operation == "divide") {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero.";
                }
            }
            
             echo "<font color='blue'>"."Result: $result"."</font>";
        }
    ?>
</body>
</html>
