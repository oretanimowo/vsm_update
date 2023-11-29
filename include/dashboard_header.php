<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
            if(isset($_SESSION['ID'])){
                $getDetails = "SELECT * FROM user WHERE ID ='{$_SESSION['ID']}'";
                $getDetailsResult = mysqli_query($connect, $getDetails);
                while($details_row = mysqli_fetch_array($getDetailsResult)){
                    $firstname = $details_row['Firstname'];
            
        ?>
<div class="header" id="header">
 <!-------------------------- logo  ---------------------->
    <div class="logo">
        <img src="../assets/images/logo.png" width="100%" alt="VSM">
        <p class="company-name">Vehicle Service Management</p>
    </div>
    <!-------------------------- search  ---------------------->
    <div class="search">
        <i class="fa fa-solid fa-search"></i>
        <input type="search" name="search" id="" placeholder="Search">
    </div>
    <!-------------------------- profile  ---------------------->
    <div class="profile-wrap right">
        <div class="display-mode">
            <i class="bx bx-moon"></i>
        </div>
        <div class="notification">
            <i class="bx bx-bell"></i>
        </div>
        <div class="profile">
            <div class="profile-image">
                <img src="../assets/images/faces/1.jpg" width="100%" alt="">
            </div>
            <?php
            
            ?>
            <div class="profile-name">
                <h4>Hey, <?php echo $firstname;?></h4>
                <?php  };?>
                <?php 
                if($_SESSION['admin']==1){
                ?>
                <p class="profile-type">Admin's account</p> 
                <?php }else{?>
                <p class="profile-type">User's account</p> 
                <?php }?>
            </div>
        </div>
        <div class="settings">
            <i class="bx bx-cog"></i>
        </div>
    </div>
</div>
<?php }?>
</body>
</html>