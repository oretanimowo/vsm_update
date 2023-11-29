<?php
$id=$_SESSION['ID'];
    $getDetails = "SELECT * FROM user WHERE ID=$id";
    $getDetails_Result = mysqli_query($connect, $getDetails);
   $row = mysqli_fetch_assoc($getDetails_Result);
        $admin = $row['admin'];
        $firstname = $row['Firstname'];
        $lastname=$row['lastname'];
    
?> 