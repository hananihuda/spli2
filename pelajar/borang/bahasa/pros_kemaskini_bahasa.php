<?php

include '../../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$bahasa=$_POST['bahasa'];
$tahap=$_POST['tahap'];
$id_bahasa=$_POST['id_bahasa'];



/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE bahasa set 
bahasa='" . $bahasa . "',
tahap='" . $tahap . "'
 WHERE id_bahasa='" .$id_bahasa. "'"; //takleh tukar


$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>