<?php

include '../../../config.php';

session_start();

$_SESSION['user']=$username;
$name=$_SESSION["user"];

// var kita set untuk pegang data form        ||    FORM       //
$id_user=$_SESSION['username'];
$nama_rujukan=$_POST['nama_rujukan'];
$jawatan_rujukan=$_POST['jawatan_rujukan'];
$no_tel_rujukan=$_POST['no_tel_rujukan'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "INSERT INTO rujukan (
        id_user,
        nama_rujukan, /*dalam DB */
        jawatan_rujukan,
        no_tel_rujukan
        ) VALUES(
        '$id_user',
        '$nama_rujukan', /* yang kita set kat atas */
        '$jawatan_rujukan',
        '$no_tel_rujukan')";

$query_run=mysqli_query($conn,$query);

if ($query_run) {
	echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
    echo "<a href='../tambah_rujukan.php'>KEMBALI</a>";
}



?>