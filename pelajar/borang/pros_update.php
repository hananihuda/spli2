<?php

include '../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$id_user=$_POST['id_user'];
$md=$_POST['md'];
$noic=$_POST['noic'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$tempatlahir=$_POST['tempatlahir'];
$email=$_POST['email'];
$notel=$_POST['notel'];
$umPm2=$_POST['umPm2'];
$umNi1=$_POST['umNi1'];
$umNi2=$_POST['umNi2'];
$moAm1=$_POST['moAm1'];
$moAm2=$_POST['moAm2'];
$moPm1=$_POST['moPm1'];
$moPm2=$_POST['moPm2'];
$moNi1=$_POST['moNi1'];
$moNi2=$_POST['moNi2'];
$lab1=$_POST['lab1'];
$lab2=$_POST['lab2'];
$radiog=$_POST['radiog'];
$radiol=$_POST['radiol'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE pelajar set md='" . $md . "',
 noic='" . $noic . "', 
 alamat='" . $alamat . "' , 
 agama='" . $agama . "' ,
 tempatlahir='" . $tempatlahir . "',
 email='" . $email . "' ,
 notel='" . $notel . "' ,
 umPm2='" . $umPm2 . "' ,
 umNi1='" . $umNi1 . "' ,
 umNi2='" . $umNi2 . "' ,
 moAm1='" . $moAm1 . "' ,
 moAm2='" . $moAm2 . "' ,
 moPm1='" . $moPm1 . "' ,
 moPm2='" . $moPm2 . "' ,
 moNi1='" . $moNi1 . "' ,
 moNi2='" . $moNi2 . "' ,
 lab1='" . $lab1 . "' ,
 lab2='" . $lab2 . "' ,
 radiog='" . $radiog . "' ,
 radiol='" . $radiol . "' 
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