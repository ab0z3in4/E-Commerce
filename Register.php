<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/register.css">
    <title>Register</title>
</head>

<body>

    <div class="header">
        <a href="index.php"><img src="imges/logo.png" alt="logo" class="logo"></a>
        <div class="nav-links">
            <a href="Login.php" class="login"> Login </a>
        </div>
    </div>
    <div class="container">


        <form class="form" action="ajax.php" method="post">
            <div class="or">
                <h2>Register</h2>
                <label for="username">name</label><br>
                <input type="text" id="username" name="name" placeholder="name" required class="text"><br><br>
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" placeholder="Username" required class="text"><br><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" placeholder="Email" required class="email"><br><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder="Password" required class="password"><br><br>
                <input type="submit" name="Register" value="Register" class="submit">
                <input type="reset" value="Reset" class="reset">
            </div>
        </form>
    </div>

    <p class="copyright">© 1996–2021 FiveHotels.com™. All rights reserved.</p>
</body>

</html>