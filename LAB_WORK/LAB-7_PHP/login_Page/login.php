<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Interface</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <div class="login-container">
        <div class="avatar">
            <img src="img.png" alt="User Avatar">
        </div>
        <div class="login-form">
            <form action="login_Data.php" method="POST">
                <div class="info">
                  
                    <input type="email" id="email" name="email" placeholder="Email"required >
                </div>
             
                <div class="info">
                    
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <!-- Submit button -->
                <div class="info">
                    <button type="submit">Login</button>
                </div>
                <!-- forgot password -->
                <div class="info">
                    <a href="#" class="forgot-link">Forgot Username / Password?</a>
                </div>
                  
            </form>
        </div>
    </div>
</body>
</html>
