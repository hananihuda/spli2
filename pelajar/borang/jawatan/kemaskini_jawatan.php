<?php

include '../../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$jawatan=$_POST['jawatan'];
$infoprofil=$_POST['infoprofil'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "UPDATE resume set jawatan='" . $jawatan . "',
id_resume= '" . $id_resume . "',
infoprofil = '" . $infoprofil . "', 
WHERE id_resume = '" .$id_resume. "'" ; //takleh tukar

$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>