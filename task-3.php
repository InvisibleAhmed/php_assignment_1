<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <form method="post">
        <label>Enter test Mark 1:</label>
        <input type="number" name="score1">  <br><br>
        <label>Enter test Mark 2:</label>
        <input type="number" name="score2"> <br><br>
        <label>Enter test Mark 3:</label>
        <input type="number" name="score3"> <br><br>
        <input type="submit" value="Calculate">
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];
            
            $average = ($score1 + $score2 + $score3) / 3;
            
            if ($average >= 90) {
                $grade = 'A';
            } elseif ($average >= 80) {
                $grade = 'B';
            } elseif ($average >= 70) {
                $grade = 'C';
            } elseif ($average >= 60) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
            
            echo "</br>";  echo "</br>";  

            echo "Average Marks: $average<br>"; 

            echo "</br>";  echo "</br>";  

            echo "CGPA: $grade";
        }
    ?>
</body>
</html>
