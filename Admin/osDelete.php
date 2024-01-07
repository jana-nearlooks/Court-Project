<?php

require '../config.php';

$id = $_POST['id'];
$response;
$sql = "delete from os where id = ".$id."";

$deleteOs = mysqli_query($conn, $sql);

if($deleteOs){
    $response['status'] = "success";
    $response['message'] = "Os deleted successfully ";
}else{
    $response['status'] = "error";
    $response['message'] = "Unable to delete os";
}

echo json_encode($response);
mysqli_close($conn);

?>