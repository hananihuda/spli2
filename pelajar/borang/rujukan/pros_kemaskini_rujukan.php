<?php

include '../../../config.php';
$id_rujukan = $_POST['id_rujukan'];
$nama_rujukan = $_POST['nama_rujukan'];
$jawatan_rujukan = $_POST['jawatan_rujukan'];
$no_tel_rujukan = $_POST['no_tel_rujukan'];

/* attribut without '$' in () is from DB
        meanwhileada
'$namapel' is from FORM */


$query= "UPDATE rujukan set nama_rujukan='" . $nama_rujukan . "',
 jawatan_rujukan='" . $jawatan_rujukan . "', 
 no_tel_rujukan='" . $no_tel_rujukan . "'
 WHERE id_rujukan='" .$id_rujukan. "'"; //takleh tukar

$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>

