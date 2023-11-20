<?php

require('../config.php');

$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$email = mysqli_real_escape_string($conn,$_POST['email'] );
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$password =  mysqli_real_escape_string($conn,$password);
// $phone =  mysqli_real_escape_string($conn,$_POST['phone']);

// $registeredIP = $_SERVER['REMOTE_ADDR'];

$existsQuery = "select * from users where email ='".$email."'";
$existsQueryExec = mysqli_query($conn, $existsQuery);
$exists = mysqli_num_rows($existsQueryExec);

if($exists >= 1){
    $response['status'] = "error";
    $response['message'] = "Email  ".$email."  already exists";
}else{
    $sql = "insert into users(full_name,email,password) VALUES('$full_name','$email', '$password')";

    $register = mysqli_query($conn, $sql);

    if($register){
        $response['status'] = "success";
        $response['message'] = "You have registered successfully";
    
    }else{
        $response['status'] = "error";
        $response['message'] = "Unable to register user";
    }
}

echo json_encode($response);

mysqli_close($conn);

?>