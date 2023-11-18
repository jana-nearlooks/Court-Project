<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$env = "local";
$pg_page_name = " ";

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

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        echo 'Something Went Wrong'.mysqli_connect_error();
    }

}

date_default_timezone_set('Asia/Kolkata');

function formatDate($datetimeStamp){
    $dateTime = new DateTime($datetimeStamp);
    return $dateTime->format('d-M-Y h:m');
}

?>