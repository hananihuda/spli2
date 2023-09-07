<?php

$conn= mysqli_connect('localhost','root','','pengguna2');
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //

$jawatan=$_POST['jawatan'];
$infoprofil=$_POST['infoprofil'];
$bahasa=$_POST['bahasa'];
$oendidikan=$_POST['pendidikan'];
$pengalamankerja=$_POST['pengalamankerja'];
$kebolehan=$_POST['kebolehan'];
$rujukan=$_POST['rujukan'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


//daripada DB || $ dripada FORM
$query= "UPDATE resume set infoprofil='" . $infoprofil . "',
 jawatan='" . $jawatan . "', 
 infoprofil='" . $infoprofil . "', 
 bahasa='" . $bahasa . "' ,
 pendidikan='" . $pendidikan . "' ,
 pengalamankerja='" . $pengalamankerja . "' ,
 kebolehan='" . $kebolehan . "' ,
 rujukan='" . $rujukan . "' ,
 WHERE jawatan='" .$jawatan. "'";


$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:paparesume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>