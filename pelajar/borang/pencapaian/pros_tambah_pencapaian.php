<?php

include '../../../config.php';

session_start();

$_SESSION['user']=$username;
$name=$_SESSION["user"];

// var kita set untuk pegang data form        ||    FORM       //
$id_user=$_SESSION['username'];
$id_kebolehan=$_POST['id_kebolehan'];
$pencapaian=$_POST['pencapaian'];
$tahap_pencapaian=$_POST['tahap_pencapaian'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "INSERT INTO pencapaian (
        id_user,
        id_kebolehan, /*dalam DB */
        pencapaian,
        tahap_pencapaian
        ) VALUES(
        '$id_user',
        '$id_kebolehan', /* yang kita set kat atas */
        '$pencapaian',
        '$tahap_pencapaian')";

$query_run=mysqli_query($conn,$query);

if ($query_run) {
	echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
    echo "<a href='../tambah_pencapaian.php'>KEMBALI</a>";
}



?>