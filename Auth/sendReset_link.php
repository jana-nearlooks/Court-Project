<?php
include '../config.php';
include '../functions.php';

$email = $_POST['email'];
$response['status'] = '';
$response['message'] = '';

if(!checkEmailExists($email,$conn)){
    $response['status'] = 'error';
    $response['message'] = "Email Not Found";
}else{

    $token= md5(rand());
    $updateTokenQuery = "update users set remember_token = '$token' where email = '$email'";
    $queryExec = mysqli_query($conn, $updateTokenQuery);

    $subject = 'Passeord Reset link';
    $mailContent = '<div>
    <p><b>Hello!</b></p>
    <p>You are recieving this email because we recieved a password reset request for your account.</p>
    <br>
    <p><button class="btn btn-primary"><a href='.$base_url.'/confirmpassword.php?secret='.base64_encode($email).'&token='.$token.'>Reset Password</a></button></p>
    <br>
    <p>If you did not request a password reset, no further action is required.</p>
    </div>';

        try {
            if (sendEmail($email, $subject, $mailContent)) {
                $response['status'] = 'success';
                $response['message'] = "Reset link sent to mail";
            }
        } catch (Exception $e) {
            $response['status'] = 'error';
            $response['message'] = "Unable to send mail";
        }   
}


echo json_encode($response);
mysqli_close($conn);

?>