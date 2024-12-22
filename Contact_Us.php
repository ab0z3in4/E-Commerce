<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: Login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Contact_Us.css">
    <title>Contact Us</title>
</head>

<body>

    <div class="header">
        <a href="index.php"><img src="imges/logo.png" alt="logo" class="logo"></a>
        <div class="nav-links">
            <?php if (isset($_SESSION['username'])): ?>
                <a href="Contact_Us.php" class="con">Contact Us</a>
            <?php else: ?>
                <a href="Register.php" class="reg">Register</a>
                <a href="Login.php" class="login">Login</a>
            <?php endif; ?>
            <div class="dropdown">
                <img src="imges/user.png" alt="User Photo" class="user-photo" style="width: 50px;margin-right: 10px;">
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Contact Us</h2>
        <p>Have a question or feedback? Feel free to contact us using the form below:</p>
        <form class="contact-form" action="ajax.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" name="contact" class="btn">Send Message</button>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </div>

</body>

</html>