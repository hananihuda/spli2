<?php

$conn= mysqli_connect('localhost','root','','pengguna2');
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

// var kita set untuk pegang data form        ||    FORM       //
$jawatan=$_POST['jawatan'];
$infoprofil=$_POST['infoprofil'];
$bahasa=$_POST['bahasa'];
$pendidikan=$_POST['pendidikan'];
$pengalamankerja=$_POST['pengalamankerja'];
$kebolehan=$_POST['kebolehan'];
$rujukan=$_POST['rujukan'];
//$gambar=$_POST['gambar'];


/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "INSERT INTO resume (
        jawatan,/* Dalam DB */
        infoprofil, 
        bahasa,
        pendidikan,
        pengalamankerja,
        kebolehan,
        rujukan) VALUES(
        /* gambar */
        '$jawatan',/*follow line 9 - 17 */
        '$infoprofil', 
        '$bahasa',
        '$pendidikan',
        '$pengalamankerja',
        '$kebolehan',
        '$rujukan')";
        /*'$gambar'*/

$query_run=mysqli_query($conn,$query);
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:paparesume.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>