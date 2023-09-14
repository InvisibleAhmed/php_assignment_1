<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <form method="post">
        <label>Please Enter temperature:</label>
        <input type="number" name="temperature"> <br><br>
        <label>Select conversion:</label>
        <select name="conversion">
            <option value="c_to_f">Celsius to Fahrenheit</option>
            <option value="f_to_c">Fahrenheit to Celsius</option>
        </select>
        <br><br>
        <input type="submit" value="Convert">
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversion = $_POST["conversion"];
            
            if ($conversion == "c_to_f") {
                $result = ($temperature * 9/5) + 32;
                echo "Converted temperature: $result°F";
            } elseif ($conversion == "f_to_c") {
                $result = ($temperature - 32) * 5/9;
                echo "Converted temperature: $result°C";
            }
        }
    ?>
</body>
</html>
