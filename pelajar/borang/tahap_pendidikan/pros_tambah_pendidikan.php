<?php


include '../../../config.php';

session_start();

$_SESSION['user']=$username;
$name=$_SESSION["user"];

// var kita set untuk pegang data form        ||    FORM       //
$id_user=$_SESSION['username'];
$nama_kolej=$_POST['nama_kolej'];
$tahap=$_POST['tahap'];
$nama_kursus=$_POST['nama_kursus'];
$diskripsi_pendidikan=$_POST['diskripsi_pendidikan'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "INSERT INTO pendidikan (
        id_user,
        nama_kolej, /*dalam DB */
        tahap,
        nama_kursus,
        diskripsi_pendidikan
        ) VALUES(
        '$id_user',
        '$nama_kolej', /* yang kita set kat atas */
        '$tahap', /* follow line 9 sampai 27 */
        '$nama_kursus',
        '$diskripsi_pendidikan')";

$query_run=mysqli_query($conn,$query);

if ($query_run) {
	echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
    echo "<a href='../tambah_pendidikan.php'>KEMBALI</a>";
}



?>