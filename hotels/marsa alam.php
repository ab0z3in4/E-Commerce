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
    <link rel="stylesheet" href="../Css/cairo.css">
    <title>Project</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 10px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .footer {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="../index.php"><img src="../imges/logo.png" alt="logo" class="logo"></a>
        <div class="nav-links">
            <?php if (isset($_SESSION['username'])): ?>
                <a href="../Contact_Us.php" class="con">Contact Us</a>
            <?php else: ?>
                <a href="../Register.php" class="reg">Register</a>
                <a href="../Login.php" class="login">Login</a>
            <?php endif; ?>
            <div class="dropdown">
                <img src="../imges/user.png" alt="User Photo" class="user-photo"
                    style="width: 50px;margin-right: 10px;">
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <h2 class="h2">Marsa Alam Hotels</h2>
        <ul class="hotel-list">
            <li class="hotel-item">
                <img src="imges/cairo 1.jpg" alt="Cairo"
                    style="width: 600px; box-shadow: 1px 1px 10px #4e4e4e, -1px -1px 10px #4e4e4e;">
                <br><br>
                <a href="hotels/cairo 1.php" class="a1">Four Seasons Hotel Cairo at Nile Plaza</a>
                <br>
                <span>This 5-star hotel offers air-conditioned rooms with flat-screen TVs, marble bathrooms, and
                    panoramic views of the Nile River.</span>
            </li>
            <li class="hotel-item">
                <img src="imges/cairo 2.jpg" alt="Cairo"
                    style="width: 600px; box-shadow: 1px 1px 10px #4e4e4e, -1px -1px 10px #4e4e4e;">
                <br><br>
                <a href="hotels/cairo 2.php" class="a1">Le Meridien Cairo Airport</a>
                <br>
                <span>Le Meridien Cairo Airport is connected to Terminal 3 at Cairo Airport via a pedestrian bridge,
                    offering an outdoor heated pool and a fitness center. Free Wi-Fi is available.</span>
            </li>
            <li class="hotel-item">
                <img src="imges/cairo 3.jpg" alt="Cairo"
                    style="width: 600px; box-shadow: 1px 1px 10px #4e4e4e, -1px -1px 10px #4e4e4e;">
                <br><br>
                <a href="hotels/cairo 3.php" class="a1">Fairmont Nile City</a>
                <br>
                <span>This 5-star hotel is located in Nile City Towers next to the Nile River, featuring a rooftop pool
                    with stunning views across Cairo to the Pyramids. It offers 7 dining and drinking options.</span>
            </li>
            <li class="hotel-item">
                <img src="imges/cairo 4.jpg" alt="Cairo"
                    style="width: 600px; box-shadow: 1px 1px 10px #4e4e4e, -1px -1px 10px #4e4e4e;">
                <br><br>
                <a href="hotels/cairo 4.php" class="a1">Novotel Cairo Airport</a>
                <br>
                <span>Novotel Cairo Airport offers two outdoor pools in the landscaped garden, free Wi-Fi and a free
                    airport shuttle service. It is a 10-minute drive from the International Convention and Exhibition
                    Center.</span>
            </li>
            <li class="hotel-item">
                <img src="imges/cairo 5.jpg" alt="Cairo"
                    style="width: 600px; box-shadow: 1px 1px 10px #4e4e4e, -1px -1px 10px #4e4e4e;">
                <br><br>
                <a href="hotels/cairo 5.php" class="a1">JW Marriott Hotel Cairo</a>
                <br>
                <span>This 5-star resort features a private man-made beach, a recreational water park, pools, volleyball
                    court, championship golf course, kids club, and a spa.</span>
            </li>
        </ul>
        <hr>
    </div>
    <footer class="footer">
        <p class="copyright">
            &copy; 1996–2024 Egypt's fivehotels.com™. All rights reserved.
        </p>
    </footer>
</body>

</html>