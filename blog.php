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
    <title>VSM Blog | Vehicle Overview</title>
    <link rel="stylesheet" href="assets/fontawesome-free-6.3.0-web/css/all.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/roots.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <style>
        .footer {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.7)), url('assets/images/cars/car2.jpg');
            background-size: cover;
            background-position: center;
        }

        .showcase-area {
            background-image:linear-gradient(150deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8) ), url('assets/images/cars/car1.jpg');
            background-size: cover;
            background-position: center;
            height: 550px;
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

        <div class="showcase-area">
            <div class="showcase-text">
                <h2>BLOG PAGE</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>

        <div class="content-area">
            <div class="blog-1">
                <div class="card-1">
                    <div class="card-image">
                        <img src="assets/images/cars/display_car_image-1024x449-1.png" alt="" width="100%">
                    </div>
                    <div class="card-head">
                        <h2>Ready to see the future of Cars</h2>
                    </div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Non expedita recusandae praesentium rerum sed ratione
                            dignissimos doloribus molestias officia consequuntur.
                            Similique praesentium animi eveniet quod mollitia veniam.
                            Quibusdam, porro totam!...</p>
                    </div>
                    <div class="card-footer space-between">
                        <div class="date">
                            <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                        </div>
                        <div class="comments">
                            <p><i class="fa fa-comments"></i> Com(05)</p>
                        </div>
                    </div>

                </div>
                <div class="card-2">
                    <div class="card2-head">
                        <h2><i class="fa fa-star"></i> Staff Picks</h2>
                    </div>
                    <div class="story-container">
                        <div class="stories">
                            <div class="stories-head">
                                <h3>How To</h3>
                            </div>
                            <div class="stories-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque labore autem non est 
                            </div>
                        </div>
                        <div class="stories">
                            <div class="stories-head">
                                <h3>How To</h3>
                            </div>
                            <div class="stories-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque labore autem non est 
                            </div>
                        </div>
                        <div class="stories">
                            <div class="stories-head">
                                <h3>How To</h3>
                            </div>
                            <div class="stories-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque labore autem non est 
                            </div>
                        </div>
                        <div class="stories">
                            <div class="stories-head">
                                <h3>How To</h3>
                            </div>
                            <div class="stories-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque labore autem non est 
                            </div>
                        </div>
                        <div class="stories">
                            <div class="stories-head">
                                <h3>How To</h3>
                            </div>
                            <div class="stories-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque labore autem non est 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-content">
                <div class="cards-container ">
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car3.png" alt="" width="100%" 100%>
                            <div class="card-overlay">
                                <div class="overlay-icon">
                                    <!-- <i class="fa fa-add"></i> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car4.png" alt="" width="100%" 100%>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between ">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-icon">
                                <!-- <i class="fa fa-add"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car5.png" alt="" width="100%" 100%>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-icon">
                                <!-- <i class="fa fa-add"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car6.png" alt="" width="100%" 100%>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-icon">
                                <!-- <i class="fa fa-add"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car7.png" alt="" width="100%" 100%>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-icon">
                                <!-- <i class="fa fa-add"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car8.png" alt="" width="100%" 100%>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-icon">
                                <!-- <i class="fa fa-add"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car9.png" alt="" width="100%" 100%>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-icon">
                                <!-- <i class="fa fa-add"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car10.png" alt="" width="100%" 100%>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-icon">
                                <!-- <i class="fa fa-add"></i> -->
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card-img">
                            <img src="assets/images/cars/car11.png" alt="" width="100%" 100%>
                        </div>
                        <div class="card-head">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ut nobis autem
                                obcaecati
                                suscipit nam quae. Obcaecati architecto mollitia aut fuga, optio quia quibusdam maxime
                                pariatur molestiae quasi, impedit totam?</p>
                        </div>
                        <div class="card-footer space-between">
                            <div class="date">
                                <p><i class="fa fa-calendar-alt"></i> 31 October 2023</p>
                            </div>
                            <div class="comments">
                                <p><i class="fa fa-comments"></i> Com(05)</p>
                            </div>
                        </div>
                        <div class="card-overlay">
                            <div class="overlay-icon">
                                <!-- <i class="fa fa-add"></i> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagnation starts here -->

                <div class="page-numbers">
                    <div> &#10094; </div>
                    <div class="active">1</div>
                    <div>2</div>
                    <div>3</div>
                    <div> &#10095; </div>
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