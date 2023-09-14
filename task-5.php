<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <?php
        $temperature = 25; 
        
        echo "<h1>Weather Report</h1>"; echo "</br>";  
        
        if ($temperature <= 0) {
            echo "It's freezing!"; echo "</br>";  
        } elseif ($temperature <= 15) {
            echo "It's raining."; echo "</br>";  
        } else {
            echo "It's warm."; echo "</br>";  
        }
    ?>
</body>
</html>
