<?php
    include("./include/connection.php");
    session_start();

    $id = $_SESSION['ID'];
    if(!isset($id)){
        header('location: signin.php');
    }
    include("./path.php");
    include("./admin/validate/appointment.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <title>VSM | Services: repair, oil-change, </title>
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/css/roots.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" type="text/css" media="all" href="daterangepicker.css" />

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>

      <script type="text/javascript" src="daterangepicker.js"></script>

    <style>
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0,0,0,0.4)), url('assets/images/cars/car3.jpg');
            background-size: cover;
            background-position: center;
        }
        .proficiency {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0,0,0,0.7)), url('assets/images/cars/car4.jpg');
            background-size: cover;
            background-position: center;
        }
        .footer {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0,0,0,0.7)), url('assets/images/cars/car2.jpg');
            background-size: cover;
            background-position: center;
        }
        .demo { 
            position: relative; 
        }
        .demo i {
            position: absolute; 
            bottom: 10px; 
            right: 24px; 
            top: auto; 
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- header starts here -->
        <div class="header space-between container">
            <!-- logo -->
            <div class="logo left">
                <img src="assets/images/favicon.png" id="logo" alt="">
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
                <p class="page-title">VSM <span>Services</span></p>
                <p class="hero-info">VSM offers the best Vehicle Services. <br> We help you turn the car you drive to the car you love</p>
                <button class="button">Get Appointment</button>
            </div>
        </div>

        <!-- our services -->
        <div class="our-services container">
            <div class="session-heading1">
                <p>Our <span>Service</span></p>
            </div>
            <div class="grid">
                <div class="service-box">
                    <div class="image">
                        <img src="assets/images/services/car-diagnosis.jpeg" alt="">
                    </div>
                    <div class="text">
                        <p class="service-title">Engine Diagnostics</p>
                        <p class="service-description">Most of the vehicles get damaged just because of maintenance neglect. If you take care of your.</p>
                    </div>
                    <span><i class='bx bx-cog'></i></span>
                    <button class="button">Read More</button>
                </div>
                <div class="service-box">
                    <div class="image">
                        <img src="assets/images/services/Oil-Change.jpeg" alt="">
                    </div>
                    <div class="text">
                        <p class="service-title">Oil Change</p>
                        <p class="service-description">Corrupti maxime omnis similique error illo quasi, </p>
                    </div>
                    <span><i class='bx bx-cog'></i></span>
                    <button class="button">Read More</button>
                </div>
                <div class="service-box">
                    <div class="image">
                        <img src="assets/images/services/break-change.jpeg" alt="">
                    </div>
                    <div class="text">
                        <p class="service-title">Anti-Lock Brake Service</p>
                        <p class="service-description">Corrupti maxime omnis similique error illo quasi, </p>
                    </div>
                    <span><i class='bx bx-cog'></i></span>
                    <button class="button">Read More</button>
                </div>
                <div class="service-box">
                    <div class="image">
                        <img src="assets/images/services/air-condition-change.jpeg" alt="">
                    </div>
                    <span><i class='bx bx-cog'></i></span>
                    <button class="button">Read More</button>
                    <div class="text">
                        <p class="service-title">Air Conditioning Evac</p>
                        <p class="service-description">Corrupti maxime omnis similique error illo quasi, </p>
                    </div>
                    <span><i class='bx bx-cog'></i></span>
                    <button class="button">Read More</button>
                </div>
                <div class="service-box">
                    <div class="image">
                        <img src="assets/images/services/part-replacement.jpeg" alt="">
                    </div>
                    <div class="text">
                        <p class="service-title">Part Replacement</p>
                        <p class="service-description">Corrupti maxime omnis similique error illo quasi, </p>
                    </div>
                    <span><i class='bx bx-cog'></i></span>
                    <button class="button">Read More</button>
                </div>
                <div class="service-box">
                    <div class="image">
                        <img src="assets/images/services/car-tune-up.jpeg" alt="">
                    </div>
                    <div class="text">
                        <p class="service-title">overall checkup</p>
                        <p class="service-description">Corrupti maxime omnis similique error illo quasi, </p>
                    </div>
                    <span><i class='bx bx-cog'></i></span>
                    <button class="button">Read More</button>
                </div>
            </div>
        </div>

        <!-- proficiency -->
        <div class="proficiency container">
            <div class="session-heading2">
                <p>Our <span>Proficiency</span></p>
            </div>
            <div class="grid">
                <div class="proficiency-box">
                    <div class="icon"><i class='bx bx-award'></i></div>
                    <div class="text">
                        <p class="proficiency-title">Highly Secured</p>
                        <p class="proficiency-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus.</p>
                    </div>
                    <span>1</span>
                </div>
                <div class="proficiency-box">
                    <div class="icon"><i class="bx bx-award"></i></div>
                    <div class="text">
                        <p class="proficiency-title">Highly Secured</p>
                        <p class="proficiency-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus.</p>
                    </div>
                    <span>2</span>
                </div>
                <div class="proficiency-box">
                    <div class="icon"><i class="bx bx-award"></i></div>
                    <div class="text">
                        <p class="proficiency-title">Highly Secured</p>
                        <p class="proficiency-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus.</p>
                    </div>
                    <span>3</span>
                </div>
                <div class="proficiency-box">
                    <div class="icon"><i class="bx bx-award"></i></div>
                    <div class="text">
                        <p class="proficiency-title">Highly Secured</p>
                        <p class="proficiency-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus.</p>
                    </div>
                    <span>4</span>
                </div>
            </div>
        </div>

        <!-- work process -->
        <div class="work-process container">
            <div class="session-heading1">
                <p>Work <span>Process</span></p>
            </div>
        </div>

        <!-- appointment -->
        <div class="appointment container space-between">
            <!-- book appointment -->
            <div class="book-appointment">
                <div class="session-heading1">
                    <p>Book An <span>Appointment</span></p>
                </div>
                <form action="" method="post">
                    <div class="form-group space-between">
                        <input type="text" name="firstname" placeholder="First Name">
                        <input type="text" name="lastname" placeholder="Last Name">
                        <input type="text" name="number" placeholder="Number">
                    </div>
                    <div class="form-group space-between">
                        <input type="text" name="email" placeholder="Email">
                        <select name="brand">
                            <option value="" hidden>Select Brand</option>
                            <option value="Mercedez Benz">Mercedez Benz</option>
                            <option value="Toyota">Toyota</option>
                            <option value="BMW">BMW</option>
                            <option value="Porshe">Porshe</option>
                        </select>
                    </div>
                    <div class="form-group space-between">
                        <input type="date" name="date">
                        <!-- <div class="form-group">
                            <label for="minDate">minDate</label>
                            <input type="date" class="form-control" id="minDate" value="" placeholder="MM/DD/YYYY">
                        </div>

                        <div class="form-group">
                            <label for="maxDate">maxDate</label>
                            <input type="date" class="form-control" id="maxDate" value="" placeholder="MM/DD/YYYY">
                        </div> -->
                        <!-- <div class="col-md-4 col-md-offset-2 demo">
                            <h4>Your Date Range Picker</h4>
                            <center>
                            <input type="text" id="config-demo" class="form-control">
                            </center>
                        </div> -->
                        <select name="services">
                            <option value="" hidden>Select Service</option>
                            <option value="Oil Change">Oil Change</option>
                            <option value="Lubrication">Lubrication</option>
                            <option value="Air conditioning">Air conditioning</option>
                            <option value="Engine Diagnostics">Engine Diagnostics</option>
                        </select>
                    </div>
                    <div class="right">
                        <button class="button1" name="submit">Estimated Rate</button>
                    </div>
                </form>
            </div>

            <!-- client reviews -->
            <div class="reviews">
                <div class="session-heading1">
                    <p>Client's <span>Reviews</span></p>
                </div>
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
    <script type="text/javascript" src="assets/js/date.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {

        $('#config-text').keyup(function() {
          eval($(this).val());
        });
        
        $('.configurator input, .configurator select').change(function() {
          updateConfig();
        });

        $('.demo i').click(function() {
          $(this).parent().find('input').click();
        });

        $('#startDate').daterangepicker({
          singleDatePicker: true,
          startDate: moment().subtract(6, 'days')
        });

        $('#endDate').daterangepicker({
          singleDatePicker: true,
          startDate: moment()
        });

        updateConfig();

        function updateConfig() {
          var options = {};

          if ($('#singleDatePicker').is(':checked'))
            options.singleDatePicker = true;
          
          if ($('#showDropdowns').is(':checked'))
            options.showDropdowns = true;

          if ($('#showWeekNumbers').is(':checked'))
            options.showWeekNumbers = true;

          if ($('#showISOWeekNumbers').is(':checked'))
            options.showISOWeekNumbers = true;

          if ($('#timePicker').is(':checked'))
            options.timePicker = true;
          
          if ($('#timePicker24Hour').is(':checked'))
            options.timePicker24Hour = true;

          if ($('#timePickerIncrement').val().length && $('#timePickerIncrement').val() != 1)
            options.timePickerIncrement = parseInt($('#timePickerIncrement').val(), 10);

          if ($('#timePickerSeconds').is(':checked'))
            options.timePickerSeconds = true;
          
          if ($('#autoApply').is(':checked'))
            options.autoApply = true;

          if ($('#dateLimit').is(':checked'))
            options.dateLimit = { days: 7 };

          if ($('#ranges').is(':checked')) {
            options.ranges = {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            };
          }

          if ($('#locale').is(':checked')) {
            $('#rtl-wrap').show();
            options.locale = {
              direction: $('#rtl').is(':checked') ? 'rtl' : 'ltr',
              format: 'MM/DD/YYYY HH:mm',
              separator: ' - ',
              applyLabel: 'Apply',
              cancelLabel: 'Cancel',
              fromLabel: 'From',
              toLabel: 'To',
              customRangeLabel: 'Custom',
              daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
              monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
              firstDay: 1
            };
          } else {
            $('#rtl-wrap').hide();
          }

          if (!$('#linkedCalendars').is(':checked'))
            options.linkedCalendars = false;

          if (!$('#autoUpdateInput').is(':checked'))
            options.autoUpdateInput = false;

          if (!$('#showCustomRangeLabel').is(':checked'))
            options.showCustomRangeLabel = false;

          if ($('#alwaysShowCalendars').is(':checked'))
            options.alwaysShowCalendars = true;

          if ($('#parentEl').val().length)
            options.parentEl = $('#parentEl').val();

          if ($('#startDate').val().length) 
            options.startDate = $('#startDate').val();

          if ($('#endDate').val().length)
            options.endDate = $('#endDate').val();
          
          if ($('#minDate').val().length)
            options.minDate = $('#minDate').val();

          if ($('#maxDate').val().length)
            options.maxDate = $('#maxDate').val();

          if ($('#opens').val().length && $('#opens').val() != 'right')
            options.opens = $('#opens').val();

          if ($('#drops').val().length && $('#drops').val() != 'down')
            options.drops = $('#drops').val();

          if ($('#buttonClasses').val().length && $('#buttonClasses').val() != 'btn btn-sm')
            options.buttonClasses = $('#buttonClasses').val();

          if ($('#applyClass').val().length && $('#applyClass').val() != 'btn-success')
            options.applyClass = $('#applyClass').val();

          if ($('#cancelClass').val().length && $('#cancelClass').val() != 'btn-default')
            options.cancelClass = $('#cancelClass').val();

          $('#config-text').val("$('#demo').daterangepicker(" + JSON.stringify(options, null, '    ') + ", function(start, end, label) {\n  console.log(\"New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')\");\n});");

          $('#config-demo').daterangepicker(options, function(start, end, label) { console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')'); }).click();;
          
        }

      });
      </script>
</body>
</html>