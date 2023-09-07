<?php


include '../../../config.php';

session_start();

$_SESSION['user']=$username;
$name=$_SESSION["user"];

// var kita set untuk pegang data form        ||    FORM       //
$id_user=$_SESSION['username'];
$nama_syarikat=$_POST['nama_syarikat'];
$jawatan_pass=$_POST['jawatan_pass'];
$tarikh_mula=$_POST['tarikh_mula'];
$tarikh_tamat=$_POST['tarikh_tamat'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "INSERT INTO pengalamankerja (
        id_user,
        nama_syarikat,
        jawatan_pass,
        tarikh_mula, /*dalam DB */
        tarikh_tamat
        ) VALUES(
        '$id_user',
        '$nama_syarikat',
        '$jawatan_pass',
        '$tarikh_mula',/* yang kita set kat atas */
        '$tarikh_tamat')";
                

$query_run=mysqli_query($conn,$query);

if ($query_run) {
	echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
    echo "<a href='../tambah_pengalaman_kerja.php'>KEMBALI</a>";
}



?>