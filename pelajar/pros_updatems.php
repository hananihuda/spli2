<?php

include '../config.php';
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
$id_syarikat=$_POST['id_syarikat'];
$namasyarikat=$_POST['namasyarikat'];
$alamatsyarikat=$_POST['alamatsyarikat'];
$emailsyarikat=$_POST['emailsyarikat'];
$notelsyarikat=$_POST['notelsyarikat'];
$namapic=$_POST['namapic'];
$notelpic=$_POST['notelpic'];
$emailpic=$_POST['emailpic'];
// $suratjawapan=$_FILES['suratjawapan'];
$responsyarikat=$_POST['responsyarikat'];


/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "UPDATE syarikat set alamatsyarikat='" . $alamatsyarikat . "', 
 emailsyarikat='" . $emailsyarikat . "', 
 notelsyarikat='" . $notelsyarikat . "' ,
 namapic='" . $namapic . "' ,
 notelpic='" . $notelpic . "' ,
  emailpic='" . $emailpic . "' ,
 namasyarikat='" . $namasyarikat . "' 
 WHERE id_syarikat ='" .$id_syarikat. "'";

$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:paparmaklumatsyarikat.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}



// suratjawapan='" . $suratjawapan . "' , NI BILA FUNGSI SURAT KAU DH HELOK
?>