<?php
    session_start();
    include("./include/connection.php");
    include("signin-logic.php")  
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
        <h2>Sign In</h2>
        <form action="" method="post" name="signin" id="form">
        <?php 
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
        }?>
            <input type="text" name="email" value="" value="<?php if(isset($_POST['email'])){echo $email;}?>" placeholder="Username Or Email">
            <input type="password" name="password" value=""  placeholder="Create Password">
            <button type="submit" name="submit" class="btn">Sign In</button>
            <small>Don`t Have An Account? <a href="signup.php">Sign In</a></small>
        </form>
    </div>
</section>

</body>
</html>