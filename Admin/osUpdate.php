<?php

require '../config.php';

$realCaseNo = $_POST['realCaseNo'];
$cnrNo = $_POST['cnrNo'];
$complainants = $_POST['complainantDataString'];
$defendants = $_POST['defendantDataString'];
$judgement = $_POST['judgement'];
$final_judgement = $_POST['finalJudgement'];

$response;
// var_dump($complainants);
// exit;

$sql = "update  os set case_no ='$realCaseNo' , cnr_no = '$cnrNo', complainants = '$complainants', defendants = '$defendants', judgement = '$judgement', final_judgement = '$final_judgement' ";


$updateOs = mysqli_query($conn, $sql);

if($updateOs){
    $response['status'] = "success";
    $response['message'] = "Os Updated Successfully";
}else{
    $response['status'] = "error";
    $response['message'] = "Unable to Update os";
}

echo json_encode($response);

mysqli_close($conn);

?>