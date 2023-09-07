<?php

session_start();
require '../config.php';

if(isset($_POST['cipta_penyelia']))
{   
    $nama_penyelia = mysqli_real_escape_string($conn, $_POST['nama_penyelia']);
    $email_penyelia = mysqli_real_escape_string($conn, $_POST['email_penyelia']);
    $notel_penyelia = mysqli_real_escape_string($conn, $_POST['notel_penyelia']);

    $query = "INSERT INTO penyelia (nama_penyelia,email_penyelia,notel_penyelia) VALUES ('$nama_penyelia','$email_penyelia','$notel_penyelia')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Maklumat Penyelia Berjaya Ditambah";
        header("Location: listPenyelia.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Maklumat Penyelia Gagal Disimpan";
        header("Location: tambahPenyelia.php");
        exit(0);
    }
}

?>
