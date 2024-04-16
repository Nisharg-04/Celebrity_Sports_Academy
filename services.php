<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CELEBRITY SPORTS ACADEMY- ALL DREAMS COMES REALITY</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="services.css">
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
                    <li><a href="#service">Services</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="event.php">Event</a></li>
                </ul>
            </div>
            <!-- <div class="navbar-social">
                <span>Follow Us</span>
                <ul>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div> -->
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
            <h1>
                Services Offered By </h1>
            <h3>CELEBRITY SPORTS ACADEMY</h3>
            <h6>


            </h6>
            <!-- <ul class="header-btn">
                <li class="main-btn btn-one"><a href="#">GET IN TOUCH</a></li>
                <li class="main-btn btn-two"><a href="#">WATCH THE VIDEO <i class="fa fa-play"></i> </a></li>
            </ul> -->
        </div>

        <section id="wrapper">
            <section class="service offset" id="service">
                <!-- <h3>Services Offered By Celebrity Sports Academy</h3>
                <br><br> -->
                <h2>Sports Coaching Programme</h2>
                <h6>For any athlete to master the given sport, it is of utmost importance to hold a proper understanding
                    of that sport. At RSA, we ensure that aspiring athletes receives a prior knowledge of the sport
                    instead of directly jumping into it. This helps in learning the skill quickly and finding out
                    creative solution on your own.</h6>

                <!-- <div class="service-content"> -->
                <div class="box">
                    <!-- <div class="box-one"> -->
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/cricket-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Cricket Coaching</div>
                        <div class="text">
                            <p>Cricket can be played for competition or for fun. Cricket is a good sport for
                                developing overall fitness, stamina and hand–eye coordination..</p>
                        </div>
                    </div>
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/football-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Football Coaching</div>
                        <div class="text">
                            <p>The field of Football is filled with opportunities for those who want to grab it, CSA
                                has a quality training Programme for fresher and for maestros as well.</p>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="box-one"> -->
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/chess-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Chess Coaching</div>
                        <div class="text">
                            <p>Chess is one of the oldest games in the world dating back over 1500 years. Chess is a
                                great sport which teaches you to win and to lose,</p>
                        </div>
                    </div>
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/archery-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Archery Coaching</div>
                        <div class="text">
                            <p>Badminton is one of the most loved Sports of our country. Badminton is the fastest
                                racquet sport in the world and hence requires.</p>
                        </div>
                    </div>
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/badminton-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Badminton Coaching</div>
                        <div class="text">
                            <p>Badminton is one of the most loved Sports of our country. Badminton is the fastest
                                racquet sport in the world and hence requires</p>
                        </div>
                    </div>
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/rifle-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Rifle Shooting Coaching</div>
                        <div class="text">
                            <p>To hit the bullseye, a considerable amount of training is needed which requires
                                involvement of the highest level.</p>
                        </div>
                    </div>
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/martial-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Martial Arts Coaching</div>
                        <div class="text">
                            <p>Martial arts has tremendous health benefits and can get you in the best shape of your
                                life very quickly</p>
                        </div>
                    </div>
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/carrom-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Carrom Coaching</div>
                        <div class="text">
                            <p>Originating from India, carrom is now one of the best tabletop games of the world.
                            </p>
                        </div>
                    </div>
                    <div class="services">
                        <div class="service-icon">
                            <img src="images/services/skating-icon.jpg" alt="">
                        </div>
                        <div class="service-title">Skating Coaching</div>
                        <div class="text">
                            <p>Roller skating is a popular sport to get fitness levels up. CSA’s expert roller
                                skating mentors have designed</p>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- <div class="service-img">
                        <img src="images/services/servicesbg4.jpg" alt="">
                    </div> -->
                <!-- </div> -->

    </div>
    </section>



    <section class="contact offset" id="contact">
        <h3>Get In Touch</h3>
        <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, praesentium facilis. Pariatur ex aliquam
            alias! Nostrum repellat distinctio vero provident deserunt alias, exercitationem quia sunt recusandae! Ex,
            beatae deserunt. Tempora.</h6>
        <div class="form">
            <form action="contact.php" method="post" id="contactForm">
                <div class="first-row">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="first-row">
                    <input type="text" name="subject" placeholder="Subject">
                    <input type="text" name="phone" placeholder="Phone">
                </div>
                <textarea name="message" id="" cols="30" rows="5" placeholder="Message"></textarea>
                <ul class="see-btn">

                    <button class="main-btn btn-two"
                        style="background-image: linear-gradient(to right, #535cf1, #a147e4);border-radius: 5px;color: white;border: none;"
                        type="submit">Submit</button>
                </ul>
            </form>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script src='contact.js'></script>
</body>

</html>