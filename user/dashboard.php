<?php
    include("../include/connection.php");
    // include("path.php");
    session_start();
    // $id = "";
    $id = $_SESSION['ID'];
    if(!isset($id)){
        header('location: ../signin.php');
    }
    include('../include/getdetails.php ');


  
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
    <link rel="stylesheet" href="../assets/css/user/user.css">
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
            <!-- total users and total cart starts here-->
            <div class="total">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="row-icon">
                                    <i class="bx bx-user"></i>
                                </div>
                                <div class="row-tex">
                                    <h3>No of cars owned</h3>
                                    <p>1266756</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="update">
                                <i class="bx bx-time"></i>
                                <p>Updated now</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="row-icon">
                                    <i class="bx bx-user"></i>
                                </div>
                                <div class="row-text">
                                    <h3>Car repair loan</h3>
                                    <p>1266756</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="update">
                                <i class="bx bx-time"></i>
                                <p>Updated now</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="row-icon">
                                    <i class="bx bx-user"></i>
                                </div>
                                <div class="row-text">
                                    <h3>VIN</h3>
                                    <p>1266756</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="update">
                                <i class="bx bx-time"></i>
                                <p>Updated now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                if($_SESSION['admin']==1){
                ?>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="row-icon">
                                    <i class="bx bx-user"></i>
                                </div>
                                <div class="row-text">
                                    <h3>total users</h3>
                                    <p>1266756</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="update">
                                <i class="bx bx-time"></i>
                                <p>Updated now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else{?>
                <?php }?>
            </div>
            <!-- total users and total cart ends here-->
            <div class="request-schedule">
                <!-- request starts here -->
                <div class="user">
                    <div class="users-name">
                        <h3>Request</h3>
                        <div class="search-user">
                            <input type="text" placeholder="search">
                            <p>Sort By</p>
                        </div>
                    </div>
                    <div class="users-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Date</th>
                                    <th>Type of request</th>
                                    <!-- <th>Level</th> -->
                                    <th>View Request</th>
                                </tr>
                            </thead>

                        <?php 
                            $sql = "SELECT * FROM car_repair_request WHERE approved = 'pending'";
                            $result = mysqli_query($connect,$sql);
                            $sn = 1;
                           
                            while($fetch_result = mysqli_fetch_array($result)){
                                $userID = $fetch_result['ID'];
                                $type_of_request = $fetch_result['type_of_request'];
                                $date = $fetch_result['date'];
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $sn++?></td>
                                    <td class="names">
                                        <div class="users-profile-name">
                                            <p><?php echo $date;?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p><?php echo $type_of_request;?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="view">
                                            <a href="#"><i class="bx bx-pen"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- request ends here -->
                 <!-- schedule list starts here-->
                <div class="upcoming">
                    <div class="upcoming-events">
                        <h3>Schdule list</h3>
                        <div class="search-upcoming">
                            <p>View All</p>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>services</th>
                                <th>date</th>
                                <!-- <th>Level</th> -->
                                <!-- <th>View Request</th> -->
                            </tr>
                        </thead>
                        <?php 
                            $query = "SELECT * FROM appointment WHERE approved = 'pending'";
                            $results= mysqli_query($connect,$query);
                            $snn = 1;
                           
                            while($fetch_results = mysqli_fetch_array($results)){
                                $user_ID = $fetch_results['ID'];
                                $services = $fetch_results['services'];
                                $date = $fetch_results['date'];
                        ?>
                        <tbody>
                                <tr>
                                    <td><?php echo $snn++?></td>
                                    <td class="names">
                                        <div class="users-profile-name">
                                            <p><?php echo $services;?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p><?php echo $date;?></p>
                                        </div>
                                    </td>
                                    <!-- <td>
                                        <div class="view">
                                            <a href="#"><i class="bx bx-pen"></i></a>
                                        </div>
                                    </td> -->
                                </tr>
                            </tbody>
                            <?php }?>
                    </table>
                    <!-- <div class="upcoming-activites">
                        <td>list numbers</td>
                        <div class="upcoming-programs">
                            <p>Car repairs</p>
                        </div>
                        <div class="upcoming-date">
                            <p>10/10/2023</p>
                        </div>
                    </div> -->
                </div>
            </div>      
            <!-- schedule list ends here-->
            <!-- payment starts here -->
            <div class="payment">
                <div class="payment">
                    <div class="payment-name">
                        <h3>Payment histroy</h3>
                        <!-- <div class="payment-user">
                            <input type="text" placeholder="search">
                            <p>Sort By</p>
                        </div> -->
                    </div>
                    <div class="payment-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>Payment type</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="names">
                                        <div class="users-profile-name">
                                            <p>Car sales</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>5,000,000</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>06-24-2023</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment-view">
                                            <p>failed</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="view-payment">
                                            <a href="#"><i class="bx bx-pen"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="names">
                                        <div class="users-profile-name">
                                            <p>Car purchase</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>5,000,000</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>06-24-2023</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment-view">
                                            <p>successful</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="view-payment">
                                            <a href="#"><i class="bx bx-pen"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="names">
                                        <div class="users-profile-name">
                                            <p>Car repairs</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>5,000,000</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>06-24-2023</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment-view">
                                            <p>successful</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="view-payment">
                                            <a href="#"><i class="bx bx-pen"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="names">
                                        <div class="users-profile-name">
                                            <p>Car repairs</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>5,000,000</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>06-24-2023</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment-view">
                                            <p>successful</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="view-payment">
                                            <a href="#"><i class="bx bx-pen"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="names">
                                        <div class="users-profile-name">
                                            <p>Car repairs</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>5,000,000</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>06-24-2023</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment-view">
                                            <p>successful</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="view-payment">
                                            <a href="#"><i class="bx bx-pen"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="names">
                                        <div class="users-profile-name">
                                            <p>Car repairs</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>5,000,000</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="savings">
                                            <p>06-24-2023</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="payment-view">
                                            <p>successful</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="view-payment">
                                            <a href="#"><i class="bx bx-pen"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- payment ends here -->
            <!-- statistics of maintance starts here-->
            <div class="stats-header">
                <h3>Monthly statistics</h3>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </div>
            <!-- statistics of maintance ends here-->
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