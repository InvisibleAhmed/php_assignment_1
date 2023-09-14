<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <form method="post">
        <label>Enter a number to check:</label> 
        <input type="number" name="number"> <br> <br>
        <input type="submit" value="Check"> <br> <br>
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            
            if ($number % 2 == 0) {
                echo "The number $number is even."; echo "</br>";  
            } else {
                echo "The number $number is odd."; echo "</br>";  
            }
        }
    ?>
</body>
</html>
