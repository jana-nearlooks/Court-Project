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

$sql = "insert into os (case_no, cnr_no, complainants, defendants, judgement, final_judgement) values ('$realCaseNo','$cnrNo','$complainants','$defendants','$judgement','$final_judgement')";

$saveOs = mysqli_query($conn, $sql);

if($saveOs){
    $response['status'] = "success";
    $response['message'] = "Os Added Successfully";
}else{
    $response['status'] = "error";
    $response['message'] = "Unable to Add os";
}

echo json_encode($response);

mysqli_close($conn);

?>