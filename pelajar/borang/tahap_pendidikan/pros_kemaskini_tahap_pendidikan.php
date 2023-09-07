<?php

include '../../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$id_pendidikan=$_POST['id_pendidikan'];
$nama_kolej=$_POST['nama_kolej'];
$tahap=$_POST['tahap'];
$nama_kursus=$_POST['nama_kursus'];
$diskripsi_pendidikan=$_POST['diskripsi_pendidikan'];


/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE pendidikan set 
nama_kolej='" . $nama_kolej . "',
tahap='" . $tahap . "',
nama_kursus='" . $nama_kursus. "', 
 diskripsi_pendidikan='" . $diskripsi_pendidikan . "'
 WHERE id_pendidikan='" .$id_pendidikan. "'"; //takleh tukar


$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>