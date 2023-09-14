<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <form method="post">
        <label>Enter First number :</label>
        <input type="number" name="num1">  <br> <br>
        <label>Enter Second number :</label>
        <input type="number" name="num2"> <br><br>
        <input type="submit" value="Compare"> <br> <br>
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            
            $larger = ($num1 > $num2) ? $num1 : $num2;
            
            echo "The larger number is: $larger";
        }
    ?>
</body>
</html>
