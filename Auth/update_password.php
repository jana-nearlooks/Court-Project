<?php
require '../config.php';
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST['email'];
$secret_key = $_POST['token'];

$check_token_query = "select remember_token from users where remember_token = '$secret_key'";
$tokenQueryExec = mysqli_query($conn, $check_token_query);

$token = mysqli_fetch_assoc($tokenQueryExec);

if($token){

    $updateSql = "update users set password = '$password' where  remember_token = '$secret_key' ";
    $updateSqlExec = mysqli_query($conn, $updateSql);

    if($updateSqlExec){
        $new_token = md5(rand());
        $update_token_query = "UPDATE users set remember_token = '$new_token' where remember_token= '$secret_key' ";
        $update_token = mysqli_query($conn, $update_token_query);

        if($update_token){
            $response['status'] = 'success';
            $response['message'] = "Password updated successfully";
        }
        
    }else{
        $response['status'] = 'error';
        $response['message'] = "Unable to update password";
    }

}else{
    $response['status'] = 'error';
    $response['message'] = "Session Expired";
}

echo json_encode($response);
mysqli_close($conn);
?>