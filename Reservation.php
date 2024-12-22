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
    <link rel="stylesheet" href="Css/reservation.css">
    <link rel="stylesheet" href="Css/message.css">
    <title>Project</title>
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
    <form id="myForm" action="ajax.php" method="post">
        <div class="foe">
            <label>Room/Suite Type</label><br />
            <select class="sel" name="room_type">
                <option>Select Room/Suite</option>
                <option>Standered</option>
                <option>Deluxe</option>
                <option>Superior Deluxe</option>
                <option>Premier Deluxe</option>
                <option>Executive Suite</option>
                <option>Junior Suite</option>
                <option>Honeymoon</option>
            </select><br /><br />
            <label>Numbers of rooms/suite</label><br />
            <select class="sel" name="num_rooms">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
            </select><br /><br />
            <label>Number of persons</label><br />
            <select class="sel" name="num_persons">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
            </select><br /><br />
            <label>Number of Children</label><br />
            <select class="sel" name="num_children">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
            </select><br /><br />
            <label>Restaurant facilities</label><br />
            <select class="sel" name="restaurant_facilities">
                <option>Do you want restaurant facilities</option>
                <option>Yes</option>
                <option>No</option>
            </select><br /><br />
            <label>Arrival date</label><br />
            <input type="date" class="sel" name="arrival_date" /><br /><br />
            <label>Departure date</label><br />
            <input type="date" class="sel" name="departure_date" /><br /><br />
            <input type="submit" value="send" name="reservation" class="submit" />
            <input type="reset" class="reset" />
        </div>
    </form>

    <!-- <div class="message" id="message">
        <div class="message-content">
            <span>Data sent successfully!</span>
            <div class="options">
                <button class="payment-btn" onclick="goForPayment()">Go for Payment</button>
                <button class="pay-on-site-btn" onclick="payOnSite()">Pay on Site</button>
            </div>
        </div>
    </div> -->



    <!-- <script>

        const form = document.getElementById("myForm");
        const message = document.getElementById("message");

        form.addEventListener("submit", function (event) {
            event.preventDefault();
            showMessage();
        });

        function showMessage() {
            message.style.display = "block";
        }

        function goForPayment() {
            window.location.href = "Payment.php"; // Redirect to Payment.php
        }

        function payOnSite() {
            alert("Your reservation is confirmed. You can pay at the hotel during your stay.");
            hideMessage();
        }

        function hideMessage() {
            message.style.display = "none";
        }

    </script> -->
    <footer class="footer">
        <p class="copyright">
            &copy; 1996–2024 Egypt's fivehotels.com™. All rights reserved.
        </p>
    </footer>
</body>

</html>