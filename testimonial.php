<?php
    include("./include/connection.php");
    session_start();

    $id = $_SESSION['ID'];
    if(!isset($id)){
        header('location: signin.php');
    }
    include("./path.php");
    // include("./admin/validate/appointment.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/testimonial.css">
    <link rel="stylesheet" href="assets/css/roots.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <title>VSM | Services: repair, oil-change, </title>
    <style>
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0,0,0,0.4)), url('assets/images/cars/car3.jpg');
            background-size: cover;
            background-position: center;
        }
        .footer {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0,0,0,0.7)), url('assets/images/cars/car2.jpg');
            background-size: cover;
            background-position: center;
        }
        .booking{
            background-image: url("assets/images/cars/download.png");
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        
        <!-- header starts here -->
        <div class="header space-between container">
            <!-- logo -->
            <div class="logo left">
                <img src="assets/images/logo.png" id="logo" alt="">
                <p class="company-name">Vehicle Service Management</p>
            </div>

            <!-- nav -->
            <div class="nav">
                <ul class="space-between">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about_us.php">About</a></li>
                    <li><a href="">Team</a></li>
                    <li><a href="testimonial.php">Achievement</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="">Review</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                </ul>
            </div>
        </div>

        <!-- back-to-top destination -->
        <span id="top"></span>

        <!-- hero -->
        <div class="hero container space-between">
            <div class="hero-text">
                <p class="page-title">About <span>Us</span></p>
                <p class="hero-info">If you think we might be a good fit for a project you’re working on and you’d like to get the feel of how we <br>can work together please contact us using contact data.</p>
                <button class="button">Get Appointment</button>
            </div>
        </div>
        <!-- <div class="hero">
            <div class="hero-img">
                <img src="assets/images/cars/bredcumbs-1.png" alt="" style="width: 100%;">
            </div>
            <div class="testimonial-text">
                <h3>Achievement</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div> -->

        <!-- page info -->
        <div class="testimonial-write-up">
            <div class="row">
                <div class="col-md-4">
                    <h3>"The rem value is the same as the<br> em value displayed above. Both <br>units are scalable."</h3>
                    <div class="row-container">
                        <div class="col-image">
                            <div class="col-md-image">
                                <img src="assets/images/cars/car1.jpg" alt="" width="100%">
                            </div>
                            <div class="col-md-tex">
                                <h6>Kimberly Gracia</h6>
                                <p>Boston Area</p>
                            </div>
                        </div>
                        <div class="col-icon">
                            hgkjhsgkjhsgdjk
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>"The rem value is the same as the<br> em value displayed above. Both <br>units are scalable."</h3>
                    <div class="row-container">
                        <div class="col-image">
                            <div class="col-md-image">
                                <img src="assets/images/cars/car1.jpg" alt="" width="100%">
                            </div>
                            <div class="col-md-tex">
                                <h6>Kimberly Gracia</h6>
                                <p>Boston Area</p>
                            </div>
                        </div>
                        <div class="col-icon">
                            uhdljkshds
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <h3>"The rem value is the same as the<br> em value displayed above. Both <br>units are scalable."</h3>
                    <div class="row-container">
                        <div class="col-image">
                            <div class="col-md-image">
                                <img src="assets/images/cars/car1.jpg" alt="" width="100%">
                            </div>
                            <div class="col-md-tex">
                                <h6>Kimberly Gracia</h6>
                                <p>Boston Area</p>
                            </div>
                        </div>
                        <div class="col-icon">
                            hgkjhsgkjhsgdjk
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>"The rem value is the same as the<br> em value displayed above. Both <br>units are scalable."</h3>
                    <div class="row-container">
                        <div class="col-image">
                            <div class="col-md-image">
                                <img src="assets/images/cars/car1.jpg" alt="" width="100%">
                            </div>
                            <div class="col-md-tex">
                                <h6>Kimberly Gracia</h6>
                                <p>Boston Area</p>
                            </div>
                        </div>
                        <div class="col-icon">
                            uhdljkshds
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="truck">
            <div class="truck-img">
                <img src="assets/images/cars/display_car_image-1024x449-1.png" alt="" style="margin-left: 150px;">
            </div>
            <div class="why container">
                <div class="why-text-1">
                    <h5>Why Choose Us</h5>
                    <h3>Best valued deals you<br> will ever find</h3>
                    <div class="why-pragraph">
                        <p>Thrown shy denote ten ladies though ask saw. Or by to he going think order <br>event music. Incommode so intention defective at convinced. Led income<br> months itself and houses you.</p>
                    </div>
                    <div class="why-btn">
                        <p>Find Deals</p>
                    </div>
                </div>
                <div class="why-text-2">
                    <div class="cross">
                        <div class="cross-img space-between">
                            <img src="assets/images/cars/drive.png" alt="">
                            <div class="cross-text">
                                <h3>Cross Country Drive</h3>
                                <p>Speedily say has suitable disposal add boy.<br> On forth doubt miles of child. Exercise joy<br> man children rejoiced.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cross">
                        <div class="cross-img space-between">
                            <img src="assets/images/cars/price.png" alt="">
                            <div class="cross-text">
                                <h3>All Inclusive Pricing</h3>
                                <p>Yet uncommonly his ten who diminution<br> astonished. Demesne new manners savings <br>staying had,</p>
                            </div>
                        </div>
                    </div>
                    <div class="cross">
                        <div class="cross-img space-between">
                            <img src="assets/images/cars/charge.png" alt="">
                            <div class="cross-text">
                                <h3>No Hidden Charges</h3>
                                <p>Under folly balls death own point now men. <br>Match way these she avoid see. She whose<br> drift their fat off.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking space-between">
            <div class="booking-text1">
                <h3>Book a car by getting in <br>touch with us</h3>
            </div>
            <div class="booking-2">
                <p>Call to book</p>
                <h3>(562) 498-4600</h3>
            </div>
        </div>

        <!-- footer starts here -->
        <div class="footer">
            <!-- newsletter subscription -->
            <div class="news-letter container">
                <form action="" method="post" class="space-between">
                    <p>Subscribe for <span>Newsletter</span></p>
                    <!-- <p>Be the first to receive the latest news and product updates.</p> -->
                    <div class="newsletter-input">
                        <input type="email" placeholder="Enter email" class="input">
                        <button class="button-2">Subscribe</button>
                    </div>
                </form>
            </div>

            <div class="footer-content-wrap container space-between">
                <!-- company info -->
                <div class="company-info">
                    <div class="logo left">
                        <img src="assets/images/favicon.png" alt="">
                        <p class="company-name">Vehicle Service <br> Management</p>
                    </div>
                    <div class="brief">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of 
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a 
                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.
                        </p>
                    </div>
                </div>
    
                <!-- useful links -->
                <div class="useful-links">
                    <div class="cols-head">
                        <p>Useful Links</p>
                    </div>
                    <ul>
                        <li><a href=""><i class='bx bx-chevron-right' ></i> blank</a></li>
                        <li><a href=""><i class='bx bx-chevron-right' ></i> blank</a></li>
                        <li><a href=""><i class='bx bx-chevron-right' ></i> blank</a></li>
                        <li><a href=""><i class='bx bx-chevron-right' ></i> blank</a></li>
                        <li><a href=""><i class='bx bx-chevron-right' ></i> blank</a></li>
                        <li><a href=""><i class='bx bx-chevron-right' ></i> blank</a></li>
                        <li><a href=""><i class='bx bx-chevron-right' ></i> blank</a></li>
                        <li><a href=""><i class='bx bx-chevron-right' ></i> blank</a></li>
                    </ul>
                </div>

                <!-- contact info -->
                <div class="contact-info">
                    <div class="cols-head">
                        <p>Contact Info</p>
                    </div>
                    <ul>
                        <li><a href=""><i class='bx bxs-map'></i> 234, ikorodu road, lagos.</a></li>
                        <li><a href=""><i class='bx bxs-envelope' ></i> skillbanjo@gmail.com</a></li>
                        <li><a href=""><i class='bx bxs-phone' ></i> +234 706 924 2541</a></li>
                        <li><a href=""><i class='bx bx-globe' ></i> www.vsm.com</a></li>
                    </ul>
                </div>

                <!-- send message -->
                <div class="send-message">
                    <p class="cols-head">Send us a message</p>
                    <form action="" method="post">
                        <input type="text" placeholder="Full name">
                        <input type="text" placeholder="Email Address">
                        <textarea placeholder="Type your message here"></textarea>
                        <div class="right">
                            <button class="button1">Send</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- bottom -->
            <div class="bottom container space-between">
                <!-- copyright -->
                <div class="copyright">© 2022 Theme Vessel. All Rights Reserved.</div>

                <!-- social medial handles -->
                <div class="social-media-handles">
                    <ul class="right">
                        <li>
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <label>Facebook</label>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <label>Twitter</label>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                            <label>Instagram</label>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxl-github'></i></a>
                            <label>Github</label>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxl-youtube'></i></a>
                            <label>Youtube</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- back to top -->
        <div class="back-to-top">
            <a href="#top"><button title="back to top"><i class='bx bx-up-arrow-alt' ></i></button></a>
        </div>
    </div>

    <!-- javascript link -->
    <script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>