<?php
    // session_start();
    include("./include/connection.php");


    $success = $error = $found_user = "";
    if(isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $pswd = trim($_POST['password']);
        $hashed_password = md5($pswd);

        if(empty($email)){
            $error = "<i class='fa-solid fa-circle-exclamation'></i>";
        }elseif(empty($pswd)){
            $error = "<i class='fa-solid fa-circle-exclamation'></i>";
        }else{
            $qry = "SELECT * FROM user WHERE email='$email' AND password='$hashed_password'";
            $result = mysqli_query($connect, $qry);
                if($found_user = mysqli_num_rows($result) > 0){
                    $row= mysqli_fetch_assoc($result);
                    $_SESSION['ID'] = $row['ID'];
                    $_SESSION['admin'] = $row['admin'];
                    $_SESSION['message'] = "Log in successful!";
                    $_SESSION['admin'] = $row['admin'];
                    $admin= $row['admin'];
                    $_SESSION['email'] = $row['email'];
                    header("location: homepage.php");   
                }
            }if($found_user != 1){
                $_SESSION['message'] = "User doesnt exist!";
                // header("location: dashboard.php");
            }
            if($email !=1){
                $_SESSION['message'] = "Email doesnt exist";
            }if($hashed_password !=1){
                $_SESSION['message'] = "Incorrect password";
            }
        }