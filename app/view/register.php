<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<div class="logo-container">
    <img src="image/logo3.png" alt="TopUp In Logo" class="logo">
    <h1 class="logo-text">TopUp In</h1> 
</div>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="UserController.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Masukkan Email" required>
            <input type="password" name="password" placeholder="Masukkan Password" required>
            <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
            <input type="submit" value="Sign Up">
        </form>
        <div class="line">
        <span>OR</span>
    </div>
        <div class="google-signup">Sign Up with Google</div>
        <a class="login-link" href="login.php">Already have an account? Log In</a>
    </div>
</body>
</html>
