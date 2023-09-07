<?php

include '../../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$id_user=$_POST['id_user'];
$jawatan=$_POST['jawatan'];
$infoprofil=$_POST['infoprofil'];


/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE resume set jawatan='" . $jawatan . "',
 id_user='" . $id_user . "', 
 infoprofil='" . $infoprofil . "'
 WHERE id_user='" .$id_user. "'"; //takleh tukar


$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>