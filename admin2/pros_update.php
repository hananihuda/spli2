<?php

include '../../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$namapel=$_POST['nama'];
$noic=$_POST['noic'];
$tarikhlahir=$_POST['tarikhlahir'];
$tempatlahir=$_POST['tempat_lahir'];
$adikberadik=$_POST['bil_adik'];
$jantina=$_POST['jantina'];
$bangsa=$_POST['bangsa'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$emel=$_POST['email'];
$notel=$_POST['notel'];


/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE pelajar set namapel='" . $namapel . "',
 tarikhlahir='" . $tarikhlahir . "', 
 tempatlahir='" . $tempatlahir . "', 
 adikberadik='" . $adikberadik . "' ,
 jantina='" . $jantina . "' ,
 bangsa='" . $bangsa . "' ,
  agama='" . $agama . "' ,
 alamat='" . $alamat . "' ,
 email='" . $emel . "' ,
 notel='" . $notel . "'
 WHERE noic='" .$noic. "'"; //takleh tukar


$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../paparborangmaklumat.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>