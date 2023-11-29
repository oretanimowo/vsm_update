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
    <link rel="stylesheet" href="assets/css/about_us.css">
    <link rel="stylesheet" href="assets/css/roots.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="assets/fontawesome-free-6.3.0-web/css/all.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.3.0-web/css/all.min.css">
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
        .registered-users{
            background-image: url("assets/images/cars/download.jpg");
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
                <img src="assets/images/logo.png" alt="">
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

        <!-- <div class="spacer-100" id="home"></div> -->

        <!-- page info -->
        <div class="about_us">
            <div class="about-us-text space-between">
                <div class="about-us-text-1 space-between">
                    <div class="about-us-icon">
                        <i class="bx bx-phone"></i>
                    </div>
                    <div class="about-us-text-2">
                        <a href="#">Oil Changes</a>
                        <p>Vivamus erat diam, condimentum in aliquet <br>sed, bibendum at quam. Phasellus lacus <br>mauris.</p>
                    </div>
                </div>
                <div class="about-us-text-1 space-between">
                    <div class="about-us-icon">
                        <i class="bx bx-phone"></i>
                    </div>
                    <div class="about-us-text-2">
                        <a href="#">Oil Changes</a>
                        <p>Vivamus erat diam, condimentum in aliquet <br>sed, bibendum at quam. Phasellus lacus <br>mauris.</p>
                    </div>
                </div>
                <div class="about-us-text-1 space-between">
                    <div class="about-us-icon">
                        <i class="bx bx-phone"></i>
                    </div>
                    <div class="about-us-text-2">
                        <a href="#">Oil Changes</a>
                        <p>Vivamus erat diam, condimentum in aliquet <br>sed, bibendum at quam. Phasellus lacus <br>mauris.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="automobile">
            <div class="automobile-content space-between container">
                <div class="automobile-text">
                    <div class="automobile-text-header">
                        <h3>WELCOME TO THE AUTOMOTIVE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur corporis lab. Architecto, maiores, similique,<br> eos, ea doloribus nihil accusantium fuga numquam corporis nostrum eligendi nemo<br> sapiente quibusdam consequuntur tempore. Suscipit.</p>
                    </div>
                    <div class="automobile-list">
                        <div class="automobile-list-1">
                            <div class="automobile-list-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="automobile-tex-1">
                                <p>ARCHITECTO, MAIORES, SIMILIQUE, EOS, EA.</p>
                            </div>
                        </div>
                        <div class="automobile-list-1">
                            <div class="automobile-list-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="automobile-text-1">
                                <p>ACCUSANTIUM FUGA NUMQUAM CORPORIS NOSTRUM ELIGENDI.</p>
                            </div>
                        </div>
                        <div class="automobile-list-1">
                            <div class="automobile-list-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="automobile-text-1">
                                <p>NEMO SAPIENTE QUIBUSDAM CONSEQUUNTUR TEMPORE. SUSCIPIT.</p>
                            </div>
                        </div>
                        <div class="automobile-list-1">
                            <div class="automobile-list-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="automobile-text-1">
                                <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR CORPORIS LAB.</p>
                            </div>
                        </div>
                    </div>
                    <div class="automobile-btn">
                        <p>Contact Us</p>
                    </div>
                </div>
                <div class="automobile-image">
                    <img src="assets/images/cars/youtube.webp" alt="" width="100%">
                </div>
            </div>
        </div>
        <div class="team">
            <div class="team-text">
                <h3>Meet Our Team</h3>
                <p>Goodness far this grimaced more domestically overrode bawled one much hello macaw spurious.</p>
            </div>
            <div class="blog-content">
                <div class="cards-container">
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/download_4.jpg" alt="" width="100%">
                            <div class="card-overlay">
                                <div class="overlay-icon">
                                    <i class="fa-solid fa-icons"></i>
                                    <ul>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-text">
                            <div class="team-text-members">
                                <h6><a href="#">Lennox Wardell</a></h6>
                                <span>CHIEF EXECUTIVE OFFICER</span>
                            </div>
                            <div class="team-phone">
                                <i class="fa-solid fa-mobile-screen"></i>
                                001-234-567-XXXX
                            </div>
                        </div>
                        
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/download_4.jpg" alt="" width="100%">
                            <div class="card-overlay">
                                <div class="overlay-icon">
                                    <i class="fa-solid fa-icons"></i>
                                    <ul>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-text">
                            <div class="team-text-members">
                                <h6><a href="#">Lennox Wardell</a></h6>
                                <span>CHIEF EXECUTIVE OFFICER</span>
                            </div>
                            <div class="team-phone">
                                <i class="fa-solid fa-mobile-screen"></i>
                                001-234-567-XXXX
                            </div>
                        </div>
                        
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/download_4.jpg" alt="" width="100%">
                            <div class="card-overlay">
                                <div class="overlay-icon">
                                    <i class="fa-solid fa-icons"></i>
                                    <ul>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-text">
                            <div class="team-text-members">
                                <h6><a href="#">Lennox Wardell</a></h6>
                                <span>CHIEF EXECUTIVE OFFICER</span>
                            </div>
                            <div class="team-phone">
                                <i class="fa-solid fa-mobile-screen"></i>
                                001-234-567-XXXX
                            </div>
                        </div>
                        
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/download_4.jpg" alt="" width="100%">
                            <div class="card-overlay">
                                <div class="overlay-icon">
                                    <i class="fa-solid fa-icons"></i>
                                    <ul>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><a href="#"></a><i class="fa-brands fa-facebook-f"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-text">
                            <div class="team-text-members">
                                <h6><a href="#">Lennox Wardell</a></h6>
                                <span>CHIEF EXECUTIVE OFFICER</span>
                            </div>
                            <div class="team-phone">
                                <i class="fa-solid fa-mobile-screen"></i>
                                001-234-567-XXXX
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="registered-users container">
            <div class="registerd-details space-between">
                <div class="car-sold">
                    <i class="bx bx-phone"></i>
                   <h3>3,863</h3>
                   <p>Car Sold</p>
                </div>
                <div class="car-sold">
                    <i class="bx bx-phone"></i>
                   <h3>3,863</h3>
                   <p>Car Sold</p>
                </div>
                <div class="car-sold">
                    <i class="bx bx-phone"></i>
                   <h3>3,863</h3>
                   <p>Car Sold</p>
                </div>
                <div class="car-sold">
                    <i class="bx bx-phone"></i>
                   <h3>3,863</h3>
                   <p>Car Sold</p>
                </div>
            </div>
        </div>
        <div class="advantages container">
            <div class="advantage-text">
                <div class="advantage-header">
                    <h3>OUR ADVANTAGES</h3>
                </div>
                <div class="advantage-bottom-header">
                    <h3><a href="#">We go through extensive factroy training so that we may provide</a></h3>
                    <p>We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to<br> your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power<br> andcomplexity that it literally staggers the imagination. We possess within us two minds. So far I have written only ofthe <br>conscious mind. I would now like to introduce you to your second mind.</p>
                </div>
                <div class="advantage-other-text-1">
                    <p><a href="#">you need to make an educated decision in choosing the vehicle</a></p>
                </div>
                <div class="advantage-other-text-2">
                    <p><a href="#">Motors we think you should also have pretty high expectation for your dealership.</a></p>
                </div>
            </div>
            <div class="advantage-2">
               <div class="advantage-3">
                    <div class="advantage-2-text">
                        <p>Litora torquent per conubia nostra Class aptent taciti<br> sociosqu ad litora torquent per conubia nostra, per inceptos<br> himenaeos.Nulla a gravida purus. Fusce at interdum libero,<br> at. Vivamus erat diam, condimentum in bibendum at <br>quam.Vivamus erat diam, condimentum in aliquet sed,<br> bibendum at quam.</p>
                    </div>
                    <div class="advantage-2-text-2">
                        <h3>JAMES WARSON</h3>
                        <p>CHIEF EXECUTIVE OFFICER</p>
                    </div>
               </div>
            </div>
        </div>
        <div class="brand-ambasedor-gallarey container">
            <div class="brand-logo">
                <img src="assets/images/cars/audi.jpg" alt="">
            </div>
            <div class="brand-logo">
                <img src="assets/images/cars/bentley.jpg" alt="">
            </div>
            <div class="brand-logo">
                <img src="assets/images/cars/bmw.jpg" alt="">
            </div>
            <div class="brand-logo">
                <img src="assets/images/cars/ferrari.jpg" alt="">
            </div>
            <div class="brand-logo">
                <img src="assets/images/cars/ford.jpg" alt="">
            </div>
            <div class="brand-logo">
                <img src="assets/images/cars/toyota.jpg" alt="">
            </div>
        </div>
        <!-- footer starts here -->
        <div class="footer">
            <!-- newsletter subscription -->
            <div class="news-letter container">
                <form action="" method="post" class="space-between">
                    <p>Subscribe Newsletter</p>
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
            <a href="#home"><button title="back to top"><i class='bx bx-up-arrow-alt' ></i></button></a>
        </div>
    </div>

    <!-- javascript link -->
    <script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>