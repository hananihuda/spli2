<?php

include '../../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$id_syarikat=$_POST['id_syarikat'];
$nama_syarikat=$_POST['nama_syarikat'];
$jawatan_pass=$_POST['jawatan_pass'];
$tarikh_mula=$_POST['tarikh_mula'];
$tarikh_tamat=$_POST['tarikh_tamat'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE pengalamankerja set nama_syarikat='" . $nama_syarikat . "',
 tarikh_mula='" . $tarikh_mula . "', 
 tarikh_tamat='" . $tarikh_tamat . "',
 jawatan_pass='" . $jawatan_pass . "'
 WHERE id_syarikat='" .$id_syarikat. "'"; //takleh tukar


$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>