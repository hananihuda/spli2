<?php
function customErrorHandler($errno, $errstr, $errfile, $errline) {
  if ($errno == E_USER_ERROR) {
    // Log the error message to a file
    error_log("Fatal error: $errstr in $errfile on line $errline");
    // Display an error message to the user
    echo "An error occurred: " . $errstr;
  }
}
//connection
include '../../../config.php';

session_start();
$_SESSION['user']=$username;
$name=$_SESSION["user"];

// var kita set untuk pegang data form        ||    FORM       //
$id_user=$_SESSION['username'];
$jawatan=$_POST['jawatan'];
$infoprofil=$_POST['infoprofil'];

/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */

$query= "INSERT INTO resume (
        id_user,
        jawatan, /*dalam DB */
        infoprofil
        )VALUES(
        '$id_user',
        '$jawatan', /* yang kita set kat atas */
        '$infoprofil')";

$query_run=mysqli_query($conn,$query);

if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../../papar_resume.php');
}

else {
    trigger_error("Fatal error: unable to insert data into the database", E_USER_ERROR);
    echo "<a href='../insert_kebolehan.php'>KEMBALI</a>";
}





?>