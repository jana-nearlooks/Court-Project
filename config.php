<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$env = "local";
$pg_page_name = " ";
$conn;

if($env == 'live'){
  
    $servername = "";
    $username = "l";
    $password = "";
    $db = "";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        echo 'Something Went Wrong'.mysqli_connect_error();
    }

}else if($env == "local"){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "court";
    $base_url = "http://localhost/Court-Project";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        echo 'Something Went Wrong'.mysqli_connect_error();
    }

}

?>