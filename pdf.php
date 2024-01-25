<?php

require "vendor/autoload.php";

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample PDF</title>
</head>
<body>
    <h1>Sample PDF Generated Using mPDF</h1>
    <p>This is a sample HTML content that will be converted into a PDF using mPDF.</p>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>25</td>
            </tr>
            <tr>
                <td>Michael Johnson</td>
                <td>40</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
';

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
// $mpdf->Output();
$mpdf->Output('sample.pdf', \Mpdf\Output\Destination::DOWNLOAD);



?>