<?php

include '../../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$id_kebolehan=$_POST['id_kebolehan'];
$kebolehan=$_POST['kebolehan'];
$tahap_kebolehan=$_POST['tahap_kebolehan'];


/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */
$query= "UPDATE kebolehan set 
kebolehan='" . $kebolehan . "',
tahap_kebolehan='" . $tahap_kebolehan . "'
WHERE id_kebolehan='" .$id_kebolehan. "'"; //takleh tukar

// $query= "UPDATE kebolehan set kebolehan='" . $kebolehan . "',
//  tahap_kebolehan ='" . $tahap_kebolehan . "', 
//  WHERE id_kebolehan='" .$id_kebolehan. "'"; //takleh tukar


$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>