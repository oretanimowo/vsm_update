<?php
    // session_start();
    $id = $_SESSION['ID'];
    // $error = array();
    // $id = "";

    if(isset($_POST['update'])){
        $firstname = trim($_POST['Firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $DOB = trim($_POST['DOB']);
        $gender = trim($_POST['gender']);
        $address = trim($_POST['address']);
        $number = trim($_POST['number']);
        $about_us = trim($_POST['about_us']);


        $update = "UPDATE user SET firstname ='$firstname',lastname='$lastname',email='$email',DOB='$DOB',gender='$gender',address='$address',number='$number', about_us='$about_us' WHERE ID = '$id'";
        $myresult = mysqli_query($connect, $update);
        if($myresult){
            echo 'Succesfull';
        }else{
            echo 'not successful';
        }
    }
?>