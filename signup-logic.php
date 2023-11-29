<?php
    include("./include/connection.php");
    $firstNameError = $lastNameError = $usernameError = $emailAddressError  = $pswdError = "";
    $userExit = ""; 
    $firstName = $lastName = $username = $emailAddress =  $pswd = "";
    if(isset($_POST['submit'])){
        $firstName = ucfirst(trim($_POST['Firstname']));
        $lastName = ucfirst(trim($_POST['lastname']));
        $username = ucfirst(trim($_POST['username']));
        $emailAddress = strtolower(trim($_POST['email']));
        $pswd = trim($_POST['password']);
        $hased_password = md5($pswd);
        if(empty($firstName)){
            $firstNameError = "please fill in your name";
        }elseif(!preg_match("/^[a-zA-Z ]+$/", $firstName)){
            $firstNameError = "Name to contian Alphabets";
        }elseif(empty($lastName)){
            $lastNameError = "last name to contian Alphabets";
        }elseif(!preg_match("/^[a-zA-Z ]+$/", $lastName)){
            $lastNameError = "Name to contian Alphabets";
        }elseif(empty($username)){
            $usernameError = "username must contain Alphabet and numbers";
        }elseif(!preg_match("/^[a-zA-Z0-9]+$/", $username)){
            $usernameError = "Name to contian Alphabets";
        }elseif(empty($emailAddress)){
            $emailAddressError = "please fill in your email";
        }elseif(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
            $emailAddressError = "please enter a valid email";
        }elseif(empty($pswd)){
            $pswdError = "please create a password";
        }elseif(!preg_match('/^(?=.*\d)(?=[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pswd)){
            $pswdError = "password must contain numbers, UPPERCASE and lowercase";
         }else{
                
                $sql = "INSERT INTO user (Firstname,lastname,username ,email,password) 
                        VALUES ('$firstName', '$lastName' ,'$username' , '$emailAddress','$hased_password')";
                $query = mysqli_query($connect, $sql);
                if($query){
                    echo $complete;
                    $complete= '<p class="color: green;">New record created successfully</p>';
                    header('location: signin.php');
                }else{
                    die($complete= "An error occured!".mysqli_error($connect));
                }
                $connect->close();
            }
    }