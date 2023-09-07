<?php


include '../../../config.php';

session_start();

$_SESSION['user']=$username;
$name=$_SESSION["user"];

// var kita set untuk pegang data form        ||    FORM       //
$id_user=$_SESSION['username'];
$bahasa=$_POST['bahasa'];
$tahap=$_POST['tahap'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "INSERT INTO bahasa (
        id_user,
        bahasa, /*dalam DB */
        tahap
        ) VALUES(
        '$id_user',
        '$bahasa', /* yang kita set kat atas */
        '$tahap')";

$query_run=mysqli_query($conn,$query);

if ($query_run) {
	echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
    echo "<a href='../tambah_bahasa.php'>KEMBALI</a>";
}



?>