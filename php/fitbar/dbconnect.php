<?php
    $servername = "localhost";
    $username="root";
    $password="";
    $database="productdb";
    //create a connection
    $conn=mysqli_connect($servername, $username , $password, $database); 
    //die if connection was not successful
    if(!$conn){
        die("Sorry can't connect : ".mysqli_connect_error());
    }
    // else{
    //     echo "successful!";
    // }
    

?>