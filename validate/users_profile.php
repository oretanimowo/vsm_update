<?php
session_start();
$id = $_SESSION['ID'];
// $id = "";
// $status = $_SESSION['STATUS'];

// $firstname = $lastname = $email = $DOB = $gender = $number = $about_us = $address= "";

$query = "SELECT * FROM user WHERE ID = '$id'";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)){
    $firstname = $row['Firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $DOB = $row['DOB'];
    $gender = $row['gender'];
    $address = $row['address'];
    $number = $row['number'];
    $about_us = $row['about_us'];
}
?>