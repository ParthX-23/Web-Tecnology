<?php
if (isset($_POST["dob"])) {
    $dob = $_POST["dob"];
    $dobObj = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($dobObj)->y;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
    <link rel="stylesheet" href="ageStyle.css">
</head>
<body>
    
        <div class="container">
            <h2>Age Calculator</h2>
            <form method="post">
                <div class="dob">
                <input type="date" id="dob" name="dob" placeholder="Enter your age" required>
                </div>
                
                <div class="submit">
                <button type="submit">Calculate Age</button>
                </div>
                
            </form>

            <?php if (isset($age)): ?>
            <h3>Your Age: <?php echo $age; ?> years</h3>
            <?php endif; ?>
        </div>
    
</body>
</html>
