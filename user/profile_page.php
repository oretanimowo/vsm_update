<?php
    include("../include/connection.php");
    include("../path.php");
    include("../admin/validate/users_profile.php");
    include("../admin/validate/update.php");
    // session_start();
    $id = $_SESSION['ID'];
    if(!isset($id)){
        header('location: ../signin.php');
    }
    // include('../include/getdetails.php ');


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/profile-pag.css">
    <link rel="stylesheet" href="../assets/css/roots.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/dashboard-footer.css">
    <link rel="stylesheet" href="../assets/css/dashboard-header.css">
    <link rel="stylesheet" href="../assets/css/dashboard-side-bar.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <title>Profile Page</title>
    <style>
        .footer {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0,0,0,0.7)), url('../assets/images/cars/car2.jpg');
            background-size: cover;
            background-position: center;
        }
        .side-bar {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0,0,0,0.4)), url('../assets/images/cars/car2.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    

    <div id="wraper">
      <!-- header starts here -->
      <?php //include('../include/dashboard_header.php');?>

      <!-- back-to-top destination -->
      <span id="top"></span>

      <!-- side-bar starts here -->
      <?php  include('../include/sideBar.php');?>

        <div class="user-profile">
            <div class="main">
                <h1>User Profile</h1>
                <div class="left-side-info">
                    <img src="../assets/images/cars/bentley.jpg" class="left-side-info-top-img" alt="top-profile">
                    <div class="profile-img-fa">
                        <img src="../assets/images/cars/audi.jpg" class="left-side-info-main-img" alt="profile-pics">
                        <i class="bx bx-pen" id="left-side-info-profile-fa"></i>
                    </div>
                    <h2 class="left-side-info-name-h2"><?php echo $firstname.' '.$lastname;?></h2>
                    <h4 class="left-side-info-name-h4"><?php echo $email;?></h4>
                    <p  class="left-side-info-name-p"><?php echo $about_us;?></p>
                    <ul class="contact-social_icon">
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-telegram"></i></a></li>
                        <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                    <button class="left-side-info-button">View Full Profile</button>
                </div>
            </div>


            <div class="right-side-tab">
                <div class="tabs">
                  <div class="tab active" onclick="changeTab(0)">Profile</div>
                  <!-- <div class="tab" onclick="changeTab(1)">Profile Image</div> -->
                  <div class="tab" onclick="changeTab(1)">Settings</div>
                </div>
                <div class="tab-content active" id="tabContent0">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="input-group">
                              <label for="name">NAME</label>
                              <input type="text" name="Firstname" placeholder="Firstname" value="<?php echo $firstname;?>">
                            </div>
                            <div class="input-group">
                              <label for="name">LAST NAME</label>
                              <input type="text" name="lastname" placeholder="lastname" value="<?php echo $lastname;?>">
                            </div>
                            <div class="input-group">
                              <label for="email">Email</label>
                              <input type="email" name="email" placeholder="Enter Email address" value="<?php echo $email;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                              <label for="date">DATE OF BIRTH</label>
                              <input type="date" name="DOB">
                            </div>
                            <div class="input-group">
                              <label for="gender">GENDER</label>
                              <select class="right-side-tab-select" name="gender">
                                  <option value=""></option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                              </select>
                            </div>
                            <div class="input-group">
                              <label for="phone">PHONE</label>
                              <input type="text" name="number" placeholder="Enter Phone number">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="input-group">
                              <label for="address">ADDRESS</label>
                              <input type="text" name="address" placeholder="Input your home address" value="<?php echo $address;?>">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="input-group">
                              <label for="about">ABOUT ME</label>
                              <textarea class="right-side-tab-textarea" cols="10" rows="5" placeholder="input about yourself" name="about_us"></textarea>
                            </div>
                        </div>
                        <div class="right-side-tab-btn">
                          <button class="right-side-tab-btn-1" type="submit" name="update">Save</button>
                          <button class="right-side-tab-btn-2" type="submit">Reset</button>
                        </div>
                    </form>
                </div>

                <div class="tab-content" id="tabContent1">
                  <form action="" method="post">
                    <div class="form-group">
                      <div class="input-group">
                        <label for="password">OLD PASSWORD</label>
                        <input type="password" placeholder="Input Your Old Password">
                      </div>
                      <div class="input-group">
                        <label for="password">CONFIRM OLD PASSWORD</label>
                        <input type="password" placeholder="Confirm Your old password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <label for="password">NEW PASSWORD</label>
                        <input type="password" placeholder="Input Your New Password">
                      </div>
                      <div class="input-group">
                        <label for="password">CONFIRM NEW PASSWORD</label>
                        <input type="password" placeholder="Confirm Your New Password">
                      </div>
                    </div>
                    
                    <div class="right-side-tab-btn">
                      <button class="right-side-tab-btn-1" type="submit">Save</button>
                      <button class="right-side-tab-btn-2" type="submit">Reset</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    
    </div>

    
    <script>
      function changeTab(tabIndex) {
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');
      
        tabs.forEach(tab => tab.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));
      
        tabs[tabIndex].classList.add('active');
        tabContents[tabIndex].classList.add('active');
      }
    </script>
    <script type="text/javascript" src="../assets/js/index.js"></script>
    <script type="text/javascript" src="../assets/js/menu-toggle.js"></script>
</body>
</html>