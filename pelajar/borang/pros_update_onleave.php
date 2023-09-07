<?php

include '../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$id_user=$_POST['id_user'];
$onLeave=$_POST['onLeave'];
$startDate=$_POST['startDate'];
$endDate=$_POST['endDate'];
$coverBy=$_POST['coverBy'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE onleave set onLeave='" . $onLeave . "',
 startDate='" . $startDate . "',
 endDate='" . $endDate . "', 
 coverBy='" . $coverBy . "'
 WHERE id_user='" .$id_user. "'"; //takleh tukar


$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../paparborangmaklumat.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>