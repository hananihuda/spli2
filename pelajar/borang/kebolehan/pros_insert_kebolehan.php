<?php

//connection
include '../../../config.php';

session_start();

$_SESSION['user']=$username;
$name=$_SESSION["user"];

// var kita set untuk pegang data form        ||    FORM       //
$id_user=$_SESSION['username'];
$kebolehan=$_POST['kebolehan'];
$tahap_kebolehan=$_POST['tahap_kebolehan'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "INSERT INTO kebolehan (
        id_user,
        kebolehan, /*dalam DB */
        tahap_kebolehan
        )VALUES(
        '$id_user',
        '$kebolehan', /* yang kita set kat atas */
        '$tahap_kebolehan')";

$query_run=mysqli_query($conn,$query);

if ($query_run) {
	echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
    echo "<a href='../insert_kebolehan.php'>KEMBALI</a>";
}





?>