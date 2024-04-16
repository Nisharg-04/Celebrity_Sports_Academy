<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="event.css">
</head>

<body>
    <?php
    require ("db.php");
    session_start();
    ?>
    <div class="mynav">
        <div class="nav">
            <a href="#" class="logo">
                <img src="images/celebrity-sports-academy-high-resolution-logo-transparent.png" alt="Logo">
            </a>
            <div class="navbar-toggler" type="button" id="bar">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </div>
            <div class="menu-bar">
                <ul class="menu-items">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Event</a></li>
                </ul>
            </div>
            <div class="login">
                <?php
                if (isset($_SESSION["email"])) {
                    echo "<a href='logout.php'><button id='lrbtn' class=''>Logout</button></a>";
                } else {

                    echo "<a href='login.php'><button id='lrbtn' class=''>Login/Resister</button></a>";
                }
                ?>
            </div>
        </div>


        <div class="back" id="home">
            <div class="overlay">
                <div class="hero-shape">
                    <img src="images/header-shape.svg" alt="">
                </div>
            </div>
        </div>

        <div class="hero-text">
            <h1 style="font-size: 100px;">Events </h1>
        </div>



    </div>

    <section id="eventBox">

        <?php
        $sql = "select * from `event`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <div class='event'>
                <div class='event-text'>
                <h2>" . $row["title"] . "</h2>
                <p>" . $row["description"] . "</p>
                ";
            if (isset($_SESSION["email"])) {
                $find = "select * from `user_event` where `event_id` = '$row[event_id]' and `user_id` = '$_SESSION[email]'";
                $userEvent = mysqli_query($conn, $find);
                if (mysqli_num_rows($userEvent) == 1) {
                    echo "<button style='cursor: not-allowed;'>Registered</button>";
                } else {
                    echo "
                <form method='post' action='register_event.php'>
                    <input type='hidden' name='event_id' value='$row[event_id];'>
                    <button type='submit'>Register</button>
                </form>";
                }
            } else {
                echo "<button style='cursor: not-allowed;' onclick='alert(`Login to register in event!!`)'>Register</button>";
            }
            echo "</div>
            </div>
            ";
        }
        ?>

    </section>



    <footer>
        <div class="row-one">
            <a href="#" class="logo">
                <img src="images/celebrity-sports-academy-high-resolution-logo-transparent.png" alt="Logo">
            </a>
            <ul>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="second-row">
            <div class="first-column">
                <h6 class="footer-title">Useful Links</h6>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>
            <div class="first-column">
                <h6 class="footer-title">Programmes</h6>
                <ul>
                    <li><a href="#">SPORTS NUTRITION PROGRAM</a></li>
                    <li><a href="#">PROFESSIONAL SPORTS COACHING</a></li>
                    <li><a href="#">FITNESS EXCELLENCE PROGRAMX
                        </a></li>
                </ul>
            </div>
            <div class="first-column">
                <h6 class="footer-title">Help & Support</h6>
                <ul>
                    <li><a href="#">Support Center</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="first-column">
                <h6 class="footer-title">Subscribe Newsletter</h6>
                <div class="newsletter">
                    <input type="email" placeholder="Your Email">
                    <button type="submit">
                        <i class="fa fa-angle-double-right"></i>
                    </button>
                </div>
                <p class="text">
                    Subscribe Weekly newsletter tostay up to date. We don't send spam.
                </p>


            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>Founded By <a href="#"> Nisharg Soni </a>And<a href="#"> Dakshil Gorasiya</a> </p>
        <p> All Copyrights © 2024. Celebrity Sports Academy</p>
    </div>
    <script src="index.js"></script>
</body>

</html>