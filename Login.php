<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Login.css">
    <title>Login</title>
</head>

<body>

    <div class="header">
        <a href="index.php"><img src="imges/logo.png" alt="logo" class="logo"></a>
        <div class="nav-links">
            <a href="Register.php" class="reg">Register</a>
        </div>
    </div>

    <div class="container">
        <form class="form" action="ajax.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" id="username" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </div>

</body>

</html>