<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
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
                <h1 style="font-size: 100px;">Dashboard</h1>
            </div>
        </div>
    </section>

    <section id="mainSection">
        <div id="add" class="function">
            <h2>Add event</h2>
            <form action="add_event.php" method="post" id="addform">
                <div id="addTitle">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title">
                </div>
                <div id="addDes">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description">
                </div>

                <div id="addSubmit">
                    <input class="btn" type="submit" value="Add event">
                </div>
            </form>
        </div>
        <div id="update" class="function">
            <h2>Modify event</h2>
            <form action="update_event.php" method="post" id="updateform">
                <div id="updateTitle">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title">
                </div>

                <div id="updateDes">
                    <label for="description">New Description</label>
                    <input type="text" name="description" id="description">
                </div>

                <div id="updateSubmit">
                    <input class="btn" type="submit" value="Modify event">
                </div>
            </form>
        </div>
        <div id="delete" class="function">
            <h2>Delete event</h2>
            <form action="delete_event.php" method="post" id="deleteform">
                <div id="deleteTitle">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title">
                </div>

                <div id="deleteSubmit">
                    <input type="submit" class="btn" value="Delete event">
                </div>
            </form>
        </div>
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
    <script src="dashboard.js"></script>
</body>

</html>