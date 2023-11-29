<?php
    $servername= "localhost";
    $server_username = "root";
    $password="";
    $database_name= "vms_update_db";

    $connect = new mysqli($servername, $server_username, $password,  $database_name);
    

    // if($connect){
    //     echo "Your Database Connection Is Successful";
    // }else{
    //     echo "Connection Failed".mysqli_connect_error();
    // }
?>