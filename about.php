<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CELEBRITY SPORTS ACADEMY- ALL DREAMS COMES REALITY</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="about.css">
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
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
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
            <!-- <h1>
                Services Offered By </h1> -->
            <h3>About Us</h3>
            <!-- <h6>
        

            </h6> -->
            <!-- <ul class="header-btn">
                <li class="main-btn btn-one"><a href="#">GET IN TOUCH</a></li>
                <li class="main-btn btn-two"><a href="#">WATCH THE VIDEO <i class="fa fa-play"></i> </a></li>
            </ul> -->
        </div>

        <section class="about">
            <div class="content">
                <h6>Headquartered in the city of Ahmedabad, Rising Sports Academy was founded in the year 2017 aiming to
                    set higher bars in field of Sports and Fitness in India.
                </h6>
                <h6>
                    CSA provides multisport services such as Structured Physical Education Programmes, Sports Management
                    Services, Conducting Professional Coaching Programmes, Personal Training Programme providing
                    plethora of indoor and outdoor gaming opportunity to Rising Sports Stars of India.
                </h6>
                <h6>
                    Under the professional guidance of expert coaches, CSA not only works toward best on-field training
                    but also aims to enlighten the youth by conducting special Health, Fitness and Physical Education
                    classes. </h6>
            </div>
            <div class="img">
                <img src="images/aboutus/CSAImg.webp" alt="">
            </div>
        </section>
        <section class="about">
            <div class="content">
                <h3>VISION: </h3>
                <h6>CSA envisions to turn India into next sports super power by focusing on developing the young
                    athletes holistically. For this, CSA has embedded the need of the athlete at the core and aims to
                    provide the rising athlete with quality infrastructure, equipment and training. Along with
                    professional sports training, CSA guides the youth towards developing a methodology to live a
                    healthy, fit and disciplined life throughout.
                </h6>
            </div>
            <div class="img">
                <img src="images/aboutus/vision-new.webp" alt="">
            </div>

        </section>

        <section class="about">

            <div class="content">
                <h3>MISSION:</h3>
                <ul>
                    <li>
                        <h6>Recognizing the uniqueness of each player.</h6>
                    </li>
                    <li>
                        <h6>Strengthening the strong points and skills of the player.</h6>
                    </li>
                    <li>
                        <h6>Evaluating the performance and betterment day by day.</h6>
                    </li>
                    <li>
                        <h6>Beating the weakness within.</h6>
                    </li>
                    <li>
                        <h6>Achieving the highest of the highs.</h6>
                    </li>
                </ul>
            </div>
            <div class="img">
                <img src="images/aboutus/mission.webp" alt="">
            </div>

        </section>


        <section class="contact offset" id="contact">
            <h3>Get In Touch</h3>
            <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, praesentium facilis. Pariatur ex
                aliquam
                alias! Nostrum repellat distinctio vero provident deserunt alias, exercitationem quia sunt recusandae!
                Ex,
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