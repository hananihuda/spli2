<?php
include '../config.php';
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$id_user=$_GET['id_user'];

// Initialize Dompdf
$dompdf = new Dompdf();

// Set the content of the PDF
$content = '
<html>
    <head>
        <style>
        *{
        font-family:Arial;
    }
        #header{
        padding:10px;
    }
        @page {
                @bottom-center {
                    content: "Page " counter(page) " of " counter(pages);
                }
            }
            table {
                border-collapse: collapse;
                width: 100%;
                page-break-inside: avoid;
            }
            th{
                 background-color:silver;
            }
            .table{
                border: 1px solid black;
               
                padding: 6px;
                text-align: left;
            }
            .td{
                border: 1px solid black;
                padding: 6px;
            }
                        .th{
                border: 1px solid black;
                padding: 6px;
            }
                        .break {
                page-break-after: always;
            }
           
        </style>
    </head>
    <body>
        <div class="header" style="text-align:center">
            <img class="img1" src="/gambar/logokv.png" style=" width:175px; height:75px;"/>
            <h5 class="caption">BORANG MAKLUMAT PELAJAR</h5>
        </div>
<table style="width:70%">

<br>
<table class="table">
<tr>
        <th class="th">Nama Pelajar</th>
        <th class="th">Nombor Kad Pengenalan</th>
        <th class="th">Tarikh Lahir</th>
        <th class="th">Tempat Lahir</th>
        <th class="th">Adik Beradik</th>
        <th class="th">Jantina</th>
        <th class="th">Bangsa</th>
        <th class="th">Agama</th>
        <th class="th">Alamat</th>
        <th class="th">Emel</th>
        <th class="th">No Telefon</th>
    </tr>';

// Limit table to 15 rows
$limit = 20;

// Connect to the database
$conn = mysqli_connect("localhost", "fiveipdc_spli", "Uq67Y00RX", "fiveipdc_spli");

// Query the database
$query = "SELECT * FROM pelajar";
$result = mysqli_query($conn, $query);
//$result = mysqli_query($conn, $query,$query2); utk tble lagi 1


$counter = 0;
// Loop through the result set and add each row to the table
if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
    if ($counter == $limit) {
        $content .= '</table><div style="page-break-after: always; display:block"></div>
                <div class="header" style="text-align:center">
            <img class="img1" src="uploads/logokv.png" style=" width:175px; height:75px;"/>
            <h5 class="caption">MAKLUMAT PELAJAR</h5>
        </div>
<table style="width:70%">
<tr>
    <td>A. Maklumat Pelajar</td>
</tr>

</table>
<br>

        <table class="table">
        <tr>
                <th class="th">Nama Pelajar</th>
                <th class="th">Nombor Kad Pengenalan</th>
                <th class="th">Tarikh Lahir</th>
                <th class="th">Tempat Lahir</th>
                <th class="th">Adik Beradik</th>
                <th class="th">Jantina</th>
                <th class="th">Bangsa</th>
                <th class="th">Agama</th>
                <th class="th">Alamat</th>
                <th class="th">Emel</th>
                <th class="th">No Telefon</th>
            </tr>';
        $counter = 0;
    }
    $counter++;
    $content .= '<tr>
                    <td class="td">'.$counter.'</td>
                    <td class="td">'.$row['namapel'].'</td>
                    <td class="td">'.$row['noic'].'</td>
                    <td class="td">'.$row['tariklahir'].'</td>
                    <td class="td">'.$row['tempatlahir'].'</td>
                    <td class="td">'.$row['adikberadik'].'</td>
                    <td class="td">'.$row['jantina'].'</td>
                    <td class="td">'.$row['bangsa'].'</td>
                    <td class="td">'.$row['agama'].'</td>
                    <td class="td">'.$row['alamat'].'</td>
                    <td class="td">'.$row['email'].'</td>
                    <td class="td">'.$row['notel'].'</td>

                </tr>';
    
}
}else{
    $content.='<tr>

    <td colspan=4 style="text-align:center; font:bold 20px Arial;">Tiada Data</td>

    </tr>';
}


$content .= '</table>


    </body>
</html>';

// Generate the PDF
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
// Set the paper size and orientation
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="resume.pdf"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
echo $dompdf->output();


?>