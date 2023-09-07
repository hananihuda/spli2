<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "spli");

// Get the data for the resume
$result = mysqli_query($conn, "SELECT * FROM pelajar LEFT JOIN resume ON resume.id_user=pelajar.id_user 
    WHERE pelajar.id_user = 'id_user'");
$resume = mysqli_fetch_assoc($result);

$pendidikan=mysqli_query($conn,"SELECT * FROM pendidikan WHERE id_user='user'");
$kerja=mysqli_query($conn,"SELECT * FROM pengalamankerja WHERE id_user='user'");
$bahasa=mysqli_query($conn,"SELECT * FROM bahasa WHERE id_user='user'");
$kebolehan=mysqli_query($conn,"SELECT * FROM kebolehan WHERE id_user='user'");
$rujukan=mysqli_query($conn,"SELECT * FROM rujukan WHERE id_user='user'");

// Create the HTML for the resume
$html = '
<html>
<head>
    <style>
    #pendidikan{
    font-size:18px;
    padding-buttom:18px;
}
#myTable{
    text-align:center;
    width:100%;
    
}
.page-2{
    page-break-before:always;
}

    </style>
</head>
<body>
    <div class="header">
        <img src="'.realpath("user.jpg").'" width="100" height="100" align="right">
        <h4>'. $resume['namapel'] .'<br>'
            . $resume['jawatan'] .

        '</h4>
        <h4>'. $resume['infoprofil'] .'</h4>
    </div>
    <div class="content"> 
    <div class="page-1">

        <h3>PERSONAL INFORMATION</h3>
        <table>
            <tr>
                <td>Nombor Telefon :</td>
                <td>'. $resume['notel'] .'</td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td>'. $resume['alamat'] .'<td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>'. $resume['email'] .'<td>
            </tr>
        </table>


        <h3>PENDIDIKAN</h3>';
if (mysqli_num_rows($pendidikan)>0) {

    while ($pendidikan1=mysqli_fetch_assoc($pendidikan)) {
        $html.=
        '<table>
            <tr>
                <td>'.$pendidikan1['tahap'].'</td>
            </tr>
            <tr>
                <td>'.$pendidikan1['nama_kursus'].'</td>
            </tr>
            <tr>
                <td>'.$pendidikan1['diskripsi_pendidikan'].'</td>
            </tr>
        </table> <br>';
    }
}else{
     $html.= '<p>Tiada data</p>';
}
    $html.='

        <h3>PENGALAMAN KERJA</h3>';
if (mysqli_num_rows($kerja)>0) {

    while ($kerja1=mysqli_fetch_assoc($kerja)) {
        $html.=
        '<table>
            <tr>
                <td>'.$kerja1['nama_syarikat'].'</td>
            </tr>
            <tr>
                <td>'.$kerja1['jawatan_pass'].' | '.$kerja1['tarikh_mula'].'-'.$kerja1['tarikh_tamat'].'</td>
            </tr>
        </table> <br>';
    }
}else{
     $html.= '<p>Tiada data</p>';
}
    $html.='

    <h3>PENCAPAIAN</h3>
    <p>Tiada data</p>
       
    </div>
    <div class="page-2">
    <h3>BAHASA</h3>';
if (mysqli_num_rows($bahasa)>0) {
    $html.='
            <table border="1" id="myTable">
            <thead>
                <tr>
                    <td bgcolor="gray" style="color:white;">Bahasa</td>
                    <td bgcolor="gray" style="color:white;">Tahap</td>
                </tr>
            </thead>

    ';

    while ($bahasa1=mysqli_fetch_assoc($bahasa)) {
        $html.=
        '
            <tbody>
                <tr style="width:50%">
                    <td>'.$bahasa1['bahasa'].'</td>
                    <td>'.$bahasa1['tahap'].'</td>
                </tr>
            </tbody>';
       
    }$html.='</table>';
}else{
     $html.= '<p>Tiada data</p>';
}

    $html.='

        <h3>KEBOLEHAN</h3>';
if (mysqli_num_rows($kebolehan)>0) {
    $html.='
            <table border="1" id="myTable">
            <thead>
                <tr>
                    <td bgcolor="gray" style="color:white;">kebolehan</td>
                    <td bgcolor="gray" style="color:white;">Tahap</td>
                </tr>
            </thead>

    ';

    while ($kebolehan1=mysqli_fetch_assoc($kebolehan)) {
        $html.=
        '
            <tbody>
                <tr style="width:50%">
                    <td>'.$kebolehan1['kebolehan'].'</td>
                    <td>'.$kebolehan1['tahap_kebolehan'].'</td>
                </tr>
            </tbody>';
       
    }$html.='</table>';
}else{
     $html.= '<p>Tiada data</p>';
}

    $html.='
    <h3>RUJUKAN</h3>';
if (mysqli_num_rows($rujukan)>0) {

    while ($rujukan1=mysqli_fetch_assoc($rujukan)) {
        $html.=
        '<table>
            <tr>
                <td>'.$rujukan1['nama_rujukan'].'</td>
            </tr>
            <tr>
                <td>'.$rujukan1['jawatan_rujukan'].'</td>
            </tr>
            <tr>
                <td>'.$rujukan1['no_tel_rujukan'].'</td>
            </tr>
        </table> <br>';
    }
}else{
     $html.= '<p>Tiada data</p>';
}
    $html.='
        </div>
    </div>
</body>
</html>';
// Generate the PDF
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="resume.pdf"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');
echo $dompdf->output();

?>
