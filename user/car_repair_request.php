<?php
    session_start();
    include("../include/connection.php");
    include("../path.php");
    include("../admin/validate/car_request.php");
    // $id = "";
    $id = $_SESSION['ID'];
    if(!isset($id)){
        header('location: ../signin.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <title>VSM | Dashboard</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/roots.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/dashboard-footer.css">
    <link rel="stylesheet" href="../assets/css/dashboard-header.css">
    <link rel="stylesheet" href="../assets/css/dashboard-side-bar.css">
    <link rel="stylesheet" href="../assets/css/user/request.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
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
    <div id="wrapper">
        <!-- header starts here -->
        <?php include('../include/dashboard_header.php');?>

        <!-- back-to-top destination -->
        <span id="top"></span>

        <!-- side-bar starts here -->
       
        <?php include('../include/sideBar.php');?>
        <!-- <div class="spacer-100" id="home"></div> -->
        <!-- content starts here-->
        <div class="main">
            <div class="request-header">
                <div class="request-title">
                    <h2>Car repair request</h2>
                </div>
               <form enctype="multipart/form-data" action="" method="post" name="signup" id="form">
                    <div class="request-body">
                        <div class="car-type">
                            <label for="">Car type</label><br>
                            <input type="text" name="car_type" id="car_type">
                        </div>
                        <div class="car-type">
                            <label for="">VIN</label><br>
                            <input type="text" name="VIN" id="VIN">
                        </div>
                        <div class="car-type">
                            <label for="">Car Model</label><br>
                            <input type="text" name="car_model" id="car_model">
                        </div>
                        <div class="car-type">
                            <label for="">Reason for repair</label><br>
                            <textarea name="reason_for_repair" id="reason_for_repair" cols="30" rows="10"></textarea>
                        </div>
                        <div class="car-type select">
                            <label for="">Type of Request</label><br>   
                            <select name="type_of_request" id="">
                                <option value="">select one</option>
                                <option value="mechanical">mechanical</option>
                                <option value="electrical">electrical</option>
                                <!-- <option value=""></option> -->
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="submit_request" class="request-btn">Procced</button>
               </form>
            </div>

        </div>
        <!-- content ends here -->


        <!-- footer starts here -->
        <div class="footer">
            
        </div>
        <!-- back to top -->
        <div class="back-to-top">
            <a href="#top"><button title="back to top"><i class='bx bx-up-arrow-alt' ></i></button></a>
        </div>
    </div>

    <!-- javascript link -->
    <script type="text/javascript" src="../assets/js/index.js"></script>
    <script type="text/javascript" src="../assets/js/menu-toggle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="../assets/js/dashboard-chart.js"></script>
</body>
</html>