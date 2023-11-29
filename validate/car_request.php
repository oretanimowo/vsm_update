<?php
    
    $error = array();
    $err = array();
    $fileError = array();
    
    if(isset($_POST['submit_request'])){
        $carType = ucfirst(trim($_POST['car_type']));
        $VIN = ucfirst(trim($_POST['VIN']));
        $car_model = ucfirst(trim($_POST['car_model']));
        $reason_for_repair = ucfirst(trim($_POST['reason_for_repair']));
        $type_of_request = ucfirst(trim($_POST['type_of_request']));
        if(empty($carType) && empty($VIN) && empty($car_model) && empty($reason_for_repair) && empty($type_of_request)){
            $error['all']= "please fill in field";
        }else{
            if(empty($carType)){
                array_push($error, "Enter the name of your car");
            }
            if(empty($VIN)){
                array_push($error, "Enter your car Verification number");
            }
            if(empty($car_model)){
                array_push($error, "Enter your car model");
            }
            if(empty($reason_for_repair)){
                array_push($error, "Reasons for repairs");
            }if(empty($type_of_request)){
                array_push($error, "Type Of Request");
            }
        }if(@$admin == 0){
            $id= $_SESSION['ID'];
            $sql = "INSERT INTO car_repair_request (user_id,car_type,VIN,car_model,reason_for_repair,type_of_request,approved) 
                    VALUES ('$id','$carType','$VIN','$car_model','$reason_for_repair','$type_of_request','pending')";
            @$result = mysqli_query($connect,$sql);
        }elseif(@$admin == 1){
            $sql = "INSERT INTO car_repair_request(user_id,car_type,VIN,car_model,reason_for_repair,type_of_request,approved) 
                    VALUES ('$id','$carType','$VIN','$car_model','$reason_for_repair', '$type_of_request','approved','this is an admin account')";
            @$result = mysqli_query($connect,$sql);
        }
        if(@$result){
            if(@$admin == 0){
                echo "<script>document.location= 'dashboard.php'</script>";
            }
            elseif($admin == 1){
                // echo"<script>document.location= './request/admin_accept_user_request.php'</script>";
            }
        }else{
            echo mysqli_error($connect);
        }
    }