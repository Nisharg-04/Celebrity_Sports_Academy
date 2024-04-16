<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue</title>
    <link rel="stylesheet" href="issue.css">
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["admin"])) {
        echo "<script>alert('You are not authorized to access this page! Please login as admin.');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
    ?>
    <section id="navbar">
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
                        <li><a href="event.php">Event</a></li>
                    </ul>
                </div>
                <div class="login">
                    <a href='logout_admin.php'><button id='lrbtn' class=''>Logout</button></a>
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
                <h1 style="font-size: 100px;">Issue</h1>
            </div>
        </div>
    </section>

    <section id="mainSection">
        <!-- <div class="mainbox">
            <div>
                <h4>Name : </h4>
                <p>dakshil</p>
            </div>
            <div>
                <h4>Email : </h4>
                <p>abc@abc.abc</p>
            </div>
            <div>
                <h4>Subject : </h4>
                <p>Subject</p>
            </div>
            <div>
                <h4>Mobile</h4>
                <p>123457890</p>
            </div>
            <div>
                <h4>Message</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, reprehenderit! A, ipsum
                    expedita. Iste, nulla? Excepturi quos, repellendus alias aliquid fuga atque, illo repudiandae nam
                    soluta doloremque iusto officiis similique?</p>
            </div>
            <a href="deleteIssue.php">Remove</a>
        </div> -->

        <?php
        require("db.php");
        $sql = "SELECT * FROM `contactus`";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                if($row['solved'] == 0)
                echo "
                <div class='mainbox'>
            <div>
                <h4>Name : </h4>
                <p>$row[name]</p>
            </div>
            <div>
                <h4>Email : </h4>
                <p>$row[email]</p>
            </div>
            <div>
                <h4>Subject : </h4>
                <p>$row[subject]</p>
            </div>
            <div>
                <h4>Mobile : </h4>
                <p>$row[phone]</p>
            </div>
            <div>
                <h4>Message : </h4>
                <p>$row[message]</p>
            </div>

            <form action='deleteIssue.php' method='post'>
                <input type='hidden' name='id' value='$row[id]'>
                <input type='submit' value='Remove' id='deleteIssue'>
            </form>

        </div>
                ";
            }
        }
        ?>

    </section>

    <section id="footerSection">
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
    </section>
    <script src="index.js"></script>
</body>

</html>