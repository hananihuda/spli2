<?php

include '../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$id_user=$_POST['id_user'];
$namabapa=$_POST['namabapa'];
$noic_bapa=$_POST['noic_bapa'];
$pekerjaanbapa=$_POST['pekerjaanbapa'];
$notel_bapa=$_POST['notel_bapa'];
$namaibu=$_POST['namaibu'];
$noic_ibu=$_POST['noic_ibu'];
$pekerjaanibu=$_POST['pekerjaanibu'];
$notel_ibu=$_POST['notel_ibu'];
$neuro=$_POST['neuro'];
$obstre=$_POST['obstre'];
$ophtal=$_POST['ophtal'];
$ortho=$_POST['ortho'];
$paed=$_POST['paed'];
$plastic=$_POST['plastic'];
$urol=$_POST['urol'];
$psych=$_POST['psych'];
$onleave=$_POST['onleave'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$cover=$_POST['cover'];


/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE ibubapa set namabapa='" . $namabapa . "',
 noic_bapa='" . $noic_bapa . "', 
 pekerjaanbapa='" . $pekerjaanbapa . "', 
 notel_bapa='" . $notel_bapa . "' ,
 namaibu='" . $namaibu . "' ,
 noic_ibu='" . $noic_ibu . "' ,
 pekerjaanibu='" . $pekerjaanibu . "' ,
 notel_ibu='" . $notel_ibu . "',
 neuro='" . $neuro . "',
 obstre='" . $obstre . "',
 ophtal='" . $ophtal . "',
 ortho='" . $ortho . "',
 paed='" . $paed . "',
 plastic='" . $plastic . "',
 urol='" . $urol . "',
 psych='" . $psych . "',
 onleave='" . $onleave . "',
 date1='" . $date1 . "',
 date2='" . $date2 . "',
 cover='" . $cover . "'
 WHERE id_user='" .$id_user. "'";



$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../paparborangmaklumat.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>