<?php
session_start();
require('../config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from users where email = '$email' ";

$verify = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($verify);

if($user){
    $userId = $user['id'];
    if(password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['isAdmin'];
       

        $response['status'] = "success";
        $response['isAdmin'] = $user['isAdmin'];
        $response['message'] = "Welcome back ".$user['full_name']." - You have logged in successfully.";

    }else{
        $response['status'] = "error";
        $response['message'] = "Invalid Credentials.";
    } 
   
}else{
    $response['status'] = "error";
    $response['message'] = "User not found.";
}

echo json_encode($response);

mysqli_close($conn);

?>