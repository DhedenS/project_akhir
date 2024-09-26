<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="image/logo2.png" type="image/png"> <!-- tampil icon pada title -->
</head>
<body>
<div class="logo-container"> <!-- logo dan name text dari topup in-->
    <img src="image/logo3.png" alt="TopUp In Logo" class="logo">
    <h1 class="logo-text">TopUp In</h1> 
</div>
    <div class="signup-container"> <!--card yang berisi form dan tombol-->
        <h2>Sign In</h2>
        <form action="UserController.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Sign in">
        </form>
    <div class="line">
        <span>OR</span>
    </div>
        <div class="google-signin">Sign In With Google</div>
        <a class="login-link" href="register.php">Don't have an account? Register</a>
    </div>
</body>
</html>
