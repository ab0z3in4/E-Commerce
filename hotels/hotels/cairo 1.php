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
    <link rel="stylesheet" href="../../Css/cairo 1.css">
    <title>Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .user-review .modify,
        .user-review .delete {
            margin-top: 10px;
            cursor: pointer;
            padding: 5px 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            margin-right: 5px;
        }


        .message {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f0f0f0;
            color: black;
            padding: 20px;
            border-radius: 10px;
            z-index: 1;
            justify-content: center;

        }

        .message-content {
            align-items: center;
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        
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
        <a href="../../index.php"><img src="../../imges/logo.png" alt="logo" class="logo"></a>
        <div class="nav-links">
            <?php if (isset($_SESSION['username'])): ?>
                <a href="../../Contact_Us.php" class="con">Contact Us</a>
            <?php else: ?>
                <a href="../../Register.php" class="reg">Register</a>
                <a href="../../Login.php" class="login">Login</a>
            <?php endif; ?>
            <div class="dropdown">
                <img src="../../imges/user.png" alt="User Photo" class="user-photo"
                    style="width: 50px;margin-right: 10px;">
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="content-section section-1">
            <div class="image-gallery">
                <div class="image-wrapper">
                    <img src="imges/1.jpg" alt="hotel" class="image" />
                    <img src="imges/2.jpg" alt="hotel" class="image" />
                    <img src="imges/3.jpg" alt="hotel" class="image" />
                    <img src="imges/4.jpg" alt="hotel" class="image" />
                    <img src="imges/5.jpg" alt="hotel" class="image" />
                    <img src="imges/6.jpg" alt="hotel" class="image" />
                    <img src="imges/7.jpg" alt="hotel" class="image" />
                    <img src="imges/8.jpg" alt="hotel" class="image" />
                    <img src="imges/9.jpg" alt="hotel" class="image" />
                    <img src="imges/10.jpg" alt="hotel" class="image" />
                    <img src="imges/11.jpg" alt="hotel" class="image" />
                    <img src="imges/12.jpg" alt="hotel" class="image" />
                    <img src="imges/13.jpg" alt="hotel" class="image" />
                    <img src="imges/14.jpg" alt="hotel" class="image" />
                    <img src="imges/15.jpg" alt="hotel" class="image" />
                    <img src="imges/16.jpg" alt="hotel" class="image" />
                    <img src="imges/17.jpg" alt="hotel" class="image" />

                </div>
                <button class="prev">Prev</button>
                <button class="next">Next</button>
            </div>
        </div>
        <hr />
        <div class="content-section section-2">
            <h2>Feel like a star and enjoy luxury treatment and services at the Four Seasons Hotel Cairo at Nile Plaza
            </h2>
            <p>This 5-star hotel offers air-conditioned rooms with flat-screen TVs with satellite channels, marble
                bathrooms, and panoramic views of the Nile River. It features luxurious spa facilities and a scenic
                outdoor swimming pool area.

                Well-furnished rooms at the Four Seasons offer views of Cairo. Each bathroom has a bathtub, separate
                glass-enclosed shower cubicle, and washbasin. Some rooms have a seating area with sofas, and others have
                a private terrace where guests can enjoy dining.

                The Nile Plaza spa has a gym, salon, and indoor pool. Guests can relax in the hot tub or enjoy a
                rejuvenating massage.

                Car rental services can be arranged at the reception. Laundry and room service are available 24 hours a
                day.

                A generous fresh buffet breakfast is served every morning. Guests can enjoy traditional regional meals
                at the Four Seasons Hotel Cairo at Nile Plaza restaurant.

                The Four Seasons Cairo at Nile Plaza is located in Nile Plaza, a 10-minute drive from downtown Cairo. It
                is 20 km from Cairo International Airport.

                Specifically liked by couples — they rated it 9.0 for a two-person trip.</p>
        </div>
        <hr />
        <div class="content-section section-3">
            <h2>Popular Facilities</h2>
            <p>3 swimming pools, free Wi-Fi, airport shuttle service, family rooms, parking, tea and coffee maker in all
                rooms</p>


        </div>
        <hr />
        <div class="reservation-button">
            <a href="../../Reservation.php" class="book-now">Book Now</a>

        </div>
    </div>


    <div class="comment-form">
        <h3>Leave a Comment</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Star</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>


    <div id="commentsSection"></div>

    <div class="user-review">
        <div class="user-info">
            <h3>John Doe</h3>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

        </div>

        <p>My stay at the Four Seasons Cairo was absolutely incredible! The luxurious amenities, stunning views of the
            Nile, and impeccable service truly made me feel like royalty.</p>
    </div>

    <div class="user-review">
        <div class="user-info">
            <h3>Sarah Smith</h3>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

        </div>

        <p>I travel to Cairo frequently for business, and the Four Seasons Hotel Cairo is always my go-to accommodation.
            The convenience of its location, combined with the excellent amenities and service, make it the perfect
            choice for both work and relaxation.</p>
    </div>

    <div class="user-review">
        <div class="user-info">
            <h3>Sarah Smith</h3>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

        </div>

        <p>I travel to Cairo frequently for business, and the Four Seasons Hotel Cairo is always my go-to accommodation.
            The convenience of its location, combined with the excellent amenities and service.</p>
    </div>

    <div class="user-review">
        <div class="user-info">
            <h3>Ahmed Hassan</h3>
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

        </div>

        <p>As a frequent traveler, I've had the opportunity to stay at many luxury hotels around the world, and the Four
            Seasons Cairo stands out as one of the best. The attention to detail, from the beautifully appointed rooms
            to the delicious dining options, is truly impressive.</p>
    </div>

    <div class="message" id="deleteMessage">
        <div class="message-content">
            <span>Comment deleted successfully!</span>
        </div>
    </div>



    <footer class="footer">
        <p class="copyright">
            &copy; 1996–2021 Egypt's Hotels.com™. All rights reserved.
        </p>
    </footer>



    <script src="../js/comments.js"></script>
    <script src="../js/gallery.js"></script>

</body>

</html>