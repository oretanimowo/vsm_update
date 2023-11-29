<?php
    
    $error = array();
    $err = array();
    $fileError = array();
    // include ("");

    if(isset($_POST['submit'])){
        $firstname = ucfirst(trim($_POST['firstname']));
        $lastname = ucfirst(trim($_POST['lastname']));
        $number = ucfirst(trim($_POST['number']));
        $email = ucfirst(trim($_POST['email']));
        $brand = ucfirst(trim($_POST['brand']));
        $date = ucfirst(trim($_POST['date']));
        $services = ucfirst(trim($_POST['services']));
        if(empty($firstname) && empty($lastname) && empty($number) && empty($email) && empty($brand) && empty($date) && empty($services)){
            $error['all']= "please fill in field";
        }else{
            if(empty($firstname)){
                array_push($error, "Enter your first name");
            }
            if(empty($lastname)){
                array_push($error, "Enter your last name");
            }
            if(empty($number)){
                array_push($error, "Enter your phone number");
            }
            if(empty($email)){
                array_push($error, "enter your email");
            }if(empty($brand)){
                array_push($error, "what is the brand of your car");
            }if(empty($date)){
                array_push($error, "date suitable for your appointment");
            }if(empty($services)){
                array_push($error, "what service do you wanr us to render");
            }
        }if(@$admin == 0){
            $id= $_SESSION['ID'];
            $sql = "INSERT INTO appointment (user_id,firstname,lastname,number,email,brand,date,services,approved) 
                    VALUES ('$id','$firstname','$lastname','$number','$email','$brand','$date','$services','pending')";
            @$result = mysqli_query($connect,$sql);
        }elseif(@$admin == 1){
            $sql = "INSERT INTO appointment (user_id,firstname,lastname,number,email,brand,date,services,approved) 
                    VALUES ('$id','$firstname','$lastname','$number','$email', '$brand','$date','$services','approved','this is an admin account')";
            @$result = mysqli_query($connect,$sql);
        }if(@$result){
            if(@$admin == 0){
                echo "<script>document.location= './user/dashboard.php'</script>";
            }
            elseif($admin == 1){
                // echo"<script>document.location= './request/admin_accept_user_request.php'</script>";
            }
        }else{
            echo mysqli_error($connect);
        }
    }