<?php

require "vendor/autoload.php";

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('<style>' . file_get_contents('assets/css/bootstrap.min.css') . '</style>');
$html = file_get_contents('pdfcontent.php');

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();



?>