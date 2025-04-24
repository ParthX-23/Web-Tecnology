<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Greatest Number</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Find the Greatest Number</h2>
        <form action="gretestNumber.php" method="post">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <input type="number" name="num3" placeholder="Enter third number" required>
            <button type="submit">Find Greatest</button>
        </form>
        <!-- for php -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $greatest = max($num1, $num2, $num3);

            echo "<h2>The greatest number is: $greatest</h2>";
        }
    ?>
    </div>
</body>
</html>
