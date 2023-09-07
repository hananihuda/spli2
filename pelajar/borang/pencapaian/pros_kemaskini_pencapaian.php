<?php

include '../../../config.php';
$id_user = $_POST['id_user'];
$id_kebolehan = $_POST['id_kebolehan'];
$pencapaian = $_POST['pencapaian'];
$tahap_pencapaian = $_POST['tahap_pencapaian'];

/* attribut without '$' in () is from DB
        meanwhileada
'$namapel' is from FORM */

$query= "UPDATE pencapaian set pencapaian='" . $pencapaian . "',
 tahap_pencapaian='" . $tahap_pencapaian . "', 
 WHERE id_kebolehan='" .$id_kebolehan. "'"; //takleh tukar

$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>

