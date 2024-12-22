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
    <link rel="stylesheet" href="Css/Project.css">
    <title>Project</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            /* Apply the font to the entire document */
        }
    </style>

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

    <div class="content">


        <div class="image-container">

            <img src="imges/2.avif"
                alt="Hotels.com Sale Image">

            <div class="content-container">
                <h2 class="title">Early summer sale: Save 25% or more</h2>
                <h3 class="subtitle">Members save 25% or more on select hotels. Book by May 26.</h3>
                <a class="button">Unlock deals</a>
            </div>


            <div class="adv">

                <div class="adv-0">
                    <h2>What are the advantages of booking through the website?</h2>
                </div>

                <div class="adv-1 rounded-box">
                    <img src="logos/free-cancellation-icon.svg">
                    <h3>Free cancellation</h3>


                </div>

                <div class="adv-2 rounded-box">
                    <img src="logos/icons8-price-50.png">
                    <h3>Price match guarantee</h3>
                </div>

                <div class="adv-3 rounded-box">
                    <img src="logos/party.png">
                    <h3>Get a free night for every 10 nights you stay</h3>
                </div>

            </div>


            
        </div>

        <div class="governorates">
            <h2 class="h26">Governorates</h2>
            <ul class="ul123">
                <li>
                    <a href="hotels/cairo.php" class="a1">
                        <img src="imges/cairo 1.jpg" alt="Cairo">
                        <span>Cairo</span>
                    </a>
                </li>
                <li>
                    <a href="hotels/al ain al sokhna.php" class="a1">
                        <img src="imges/Al Ain Al Sokhna 1.jpg" alt="Al Ain Al Sokhna">
                        <span>Al Ain Al Sokhna</span>
                    </a>
                </li>
                <!-- Add other governorates here -->
                <li>
                    <a href="hotels/alfawm.php" class="a1">
                        <img src="imges/Al Fayoum 1.jpg" alt="Al Fayoum">
                        <span>Al Fayoum</span>
                    </a>
                </li>
                <li>
                    <a href="hotels/alexandria.php" class="a1">
                        <img src="imges/alexandria 1.jpg" alt="Alexandria">
                        <span>Alexandria</span>
                    </a>
                </li>
                <li>
                    <a href="hotels/aswan.php" class="a1">
                        <img src="imges/Aswan 1.jpg" alt="Aswan">
                        <span>Aswan</span>
                    </a>
                </li>
                <li>
                    <a href="hotels/dahab.php" class="a1">
                        <img src="imges/dahab 1.jpg" alt="Dahab">
                        <span>Dahab</span>
                    </a>
                </li>
                <li>
                    <a href="hotels/hurghada.php" class="a1">
                        <img src="imges/Hurghada 1.jpg" alt="Hurghada">
                        <span>Hurghada</span>
                    </a>
                </li>
                <li>
                    <a href="hotels/luxor.php" class="a1">
                        <img src="imges/luxor 1.jpg" alt="Luxor">
                        <span>Luxor</span>
                    </a>
                </li>
                <li>
                    <a href="hotels/marsa alam.php" class="a1">
                        <img src="imges/Marsa Alam 1.jpg" alt="Marsa Alam">
                        <span>Marsa Alam</span>
                    </a>
                </li>
                <li>
                    <a href="hotels/sharm el sheikh.php" class="a1">
                        <img src="imges/Sharm El Sheikh 1.jpg" alt="Sharm El Sheikh">
                        <span>Sharm El Sheikh</span>
                    </a>
                </li>
                <!-- Add other governorates here -->

                <!-- Add other governorates here -->
            </ul>
        </div>

    </div>

    <footer class="footer">
        <p class="copyright">
            &copy; 1996–2024 Egypt's fivehotels.com™. All rights reserved.
        </p>
    </footer>

</body>

</html>