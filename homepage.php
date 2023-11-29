<?php
    include("./include/connection.php");
    session_start();

    $id = $_SESSION['ID'];
    if(!isset($id)){
        header('location: signin.php');
    }
    include("./path.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/home/favicon.png" type="image/png">
    <title>VSM | Vehicle Overview</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="ontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="stylesheet" href="assets/css/roots.css">
    <link rel="stylesheet" href="assets/css/homeplugins.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/slideshow.css">
    <link rel="stylesheet" href="assets/css/why.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--swiper css-->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <style>
        .footer {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0,0,0,0.7)), url('assets/images/cars/car2.jpg');
            background-size: cover;
            background-position: center;
        }
        /* .booking{
            background-image: url("assets/images/cars/download.png");
            background-size: cover;
            background-position: center;
        } */
        /* .team{
            background-image: url("assets/images/cars/download.png");
            background-size: cover;
            background-position: center;
        } */
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="showcase">
            <video autoplay loop muted plays-inline class="back-vid">
                <source src="assets/images/home/vids/pexels-tima-miroshnichenko-6872070 (Original).mp4" type="video/mp4">
            </video>
            <!-- header starts here -->
            <div class="header space-between container">
                <!-- logo -->
                <div class="logo left">
                    <img src="assets/images/home/vsmlogo.png" alt="">
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
            
                <!--show-->
                <div class="slideshow-container">
                    <!-- <div class="myslide">
                        <div class="show container">
                            <h1>Get Our Service Today</h1>
                            <a href="" class="explore">Explore</a>
                        </div>
                    </div>
                    <div class="myslide">
                        <div class="show container">
                            <h1>Get Your Dream Car Today</h1>
                            <a href="" class="explore">Explore</a>
                        </div>
                    </div> -->
                    <div class="myslide">
                        <div class="show container">
                            <h1>Our Agents Are Here To Help You</h1>
                            <a href="" class="explore">Explore</a>
                        </div>
                    </div>
                </div>
            <div class="showcase-con center space-between">
                <div class="con1">
                    <h1>MECHANICS</h1>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo aliquam nemo voluptatum sint porro!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo aliquam nemo voluptatum sint porro!
                    </p>
                </div>
                <div class="line1"></div>
                <div class="con2">
                    <h1>CARS</h1>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo aliquam nemo voluptatum sint porro!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo aliquam nemo voluptatum sint porro!
                    </p>
                </div>
                <div class="line1"></div>
                <div class="con3">
                    <h1>SPARE PARTS & REPAIRS</h1>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo aliquam nemo voluptatum sint porro!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo aliquam nemo voluptatum sint porro!
                    </p>
                </div>
            </div>
        </div>
        </div>
        
        <div class="home-content" id="home">
            <div class="spacer">
                <div class="hero">
                    <div class="hero-head center" data-aos="fade-right" data-aos-duration="1200">
                        <h1>What Are You Looking For?</h1>
                    </div>
                    <div class="hero-search center">
                        <input type="search" class="search" placeholder="Search">
                        <i class="fas fa-magnifying-glass" style="font-size: 1.5rem; color: #e12c2c; margin-bottom: 50px;"></i>
                    </div>
                    <!--gallery-->                
                    <div class="gallery container center">
                        <div class="gal1 " data-aos="fade-up" data-aos-duration="1400">
                            <div class="gal-con">
                                <div class="gal-new">
                                    <h2>New</h2>
                                </div>
                                <div class="gal-img">
                                    <img src="assets/images/home/red audi.jpg" alt="">
                                </div>
                                <div class="gal-pin">
                                    <h3>$1950.00</h3>
                                    <div class="red-line"></div>
                                    <h4>$1500.00</h4>
                                </div>
                                <div class="gal-brand">
                                    <h2>Red Audi R8 2018</h2>
                                </div>
                            </div>
                            <div class="gal-overlay">
                                
                            </div>
                        </div>
                        <div class="gal2" data-aos="fade-up" data-aos-duration="1350">
                            <div class="gal-con">
                                <div class="gal-new">
                                    <h2>New</h2>
                                </div>
                                <div class="gal-img">
                                    <img src="assets/images/home/lamborghini.jpg" alt="">
                                </div>
                                <div class="gal-pin">
                                    <h3>$1950.00</h3>
                                    <div class="red-line"></div>
                                    <h4>$1500.00</h4>
                                </div>
                                <div class="gal-brand2">
                                    <h2>lamborghini Huracan 2016</h2>
                                </div>
                            </div>
                            <div class="gal-con2">
                                <div class="gal-new">
                                    <h2>New</h2>
                                </div>
                                <div class="gal-img">
                                    <img src="assets/images/home/electric car.jpg" alt="">
                                </div>
                                <div class="gal-pin">
                                    <h3>$1950.00</h3>
                                    <div class="red-line"></div>
                                    <h4>$1500.00</h4>
                                </div>
                                <div class="gal-brand3">
                                    <h2>Electric Car 2021</h2>
                                </div>
                            </div>               
    
                        </div>
                    </div>
                </div>
            </div>
            <div class="truck">
                <div class="truck-img" data-aos="fade-up" data-aos-duration="1400">
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
            <!--team-->
            <div class="team-slider">
                <div class="team-header center">
                    <h2>Our Team</h2>
                </div>
                <div class="team center">
                    <div class="team-con">                    
                        <div class="team-img">
                            <img src="assets/images/home/IMG_E8247.JPG" alt="" width="100%">
                        </div>
                        <!-- <span class="team-lay"></span> -->
                        <div class="team-content">
                            <div class="team-final">
                                <h2 class="team-name">David Dell</h2>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit.Tempora repudiandae accusantium alias, sed nesciunt, voluptatibus facilis laudantium exercitationem atque.                                        
                                </p>
                            </div>
                            <div class="team-socials">
                                <a href="" class="social1"><i class="fab fa-facebook"></i></a>
                                <a href="" class="social2"><i class="fab fa-instagram"></i></a>
                                <a href="" class="social3"><i class="fab fa-twitter"></i></a>
                                <a href="" class="social4"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-con ">
                        <div class="team-img">
                            <img src="assets/images/home/lamborghini.jpg" alt="" width="100%">
                        </div>
                        <div class="team-content">
                            <div class="team-final">
                                <h2 class="team-name">Wisdom Akredirichukwu</h2>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit.Tempora repudiandae accusantium alias, sed nesciunt, voluptatibus facilis laudantium exercitationem atque.                                        
                                </p>
                            </div>
                            <div class="team-socials">
                                <a href="" class="social1"><i class="fab fa-facebook"></i></a>
                                <a href="" class="social2"><i class="fab fa-instagram"></i></a>
                                <a href="" class="social3"><i class="fab fa-twitter"></i></a>
                                <a href="" class="social4"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-con ">
                        <div class="team-img">
                            <img src="assets/images/home/lamborghini huracan.jpg" alt="" width="100%">
                        </div>
                        <div class="team-content">
                            <div class="team-final">
                                <h2 class="team-name">Isreal Oluwaniyi</h2>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit.Tempora repudiandae accusantium alias, sed nesciunt, voluptatibus facilis laudantium exercitationem atque.                                        
                                </p>
                            </div>
                            <div class="team-socials">
                                <a href="" class="social1"><i class="fab fa-facebook"></i></a>
                                <a href="" class="social2"><i class="fab fa-instagram"></i></a>
                                <a href="" class="social3"><i class="fab fa-twitter"></i></a>
                                <a href="" class="social4"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-con ">
                        <div class="team-img">
                            <img src="assets/images/home/huracan.jpg" alt="" width="100%">
                        </div>
                        <div class="team-content">
                            <div class="team-final">
                                <h2 class="team-name">David semilore</h2>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit.Tempora repudiandae accusantium alias, sed nesciunt, voluptatibus facilis laudantium exercitationem atque.                                        
                                </p>
                            </div>
                            <div class="team-socials">
                                <a href="" class="social1"><i class="fab fa-facebook"></i></a>
                                <a href="" class="social2"><i class="fab fa-instagram"></i></a>
                                <a href="" class="social3"><i class="fab fa-twitter"></i></a>
                                <a href="" class="social4"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!--sponsors-->
            <div class="sponsors">
                <div class="sponsor-view1 center">
                    <img src="assets/images/home/brand1.png" alt="">
                    <img src="assets/images/home/brand2.png" alt="">
                    <img src="assets/images/home/brand3.png" alt="">
                </div>
                <div class="sponsors-view center">
                    <img src="assets/images/home/brand4.png" alt="">
                    <img src="assets/images/home/brand5.png" alt="">
                    <img src="assets/images/home/brand6.png" alt="">
                </div>
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
    <script src="js/swiper.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="assets/js/slideshowauto.js" type="text/javascript"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
        var btn = document.getElementsByClassName("btn");
        var slide = document.getElementById("slide");

        btn[0].onclick = function(){
            slide.style.transform = "translateX(0px)";
            for(i=0;i<3;i++){
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[1].onclick = function(){
            slide.style.transform = "translateX(-800px)";
            for(i=0;i<3;i++){
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[2].onclick = function(){
            slide.style.transform = "translateX(-1600px)";
            for(i=0;i<3;i++){
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[3].onclick = function(){
            slide.style.transform = "translateX(-2400px)";
            for(i=0;i<3;i++){
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }        
    </script>
    
</body>
</html>