<?php
    include("./include/connection.php");
    include("signup-logic.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and MYSQLI PROJECT WITH ADMIN PANEL</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="fontawesome-free-6.3.0-web/css/all.min.css">

</head>
<body>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
        <form action="" method="post" name="signup" id="form">
            <?php echo $firstNameError;?>
            <input type="text" name="Firstname"  value="" placeholder="First Name">
            <?php echo $lastNameError;?>
            <input type="text" name="lastname"  value="" placeholder="Last Name">
            <?php echo $usernameError;?>
            <input type="text" name="username"  value="" placeholder="Username">
            <?php echo $emailAddressError;?>
            <input type="email" name="email"  value="" placeholder="Email">
            <?php echo $pswdError;?>
            <input type="password" name="password"  value="" placeholder="Create Password">
            <!-- <input type="password" name="confirmpassword" value="" placeholder="Confirm Password"> -->
            <button type="submit" name="submit" class="btn">Sign Up</button>
            <small>Already Have An Account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>
</body>
</html>