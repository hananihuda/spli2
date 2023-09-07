<?php

session_start();
include '../config.php';

if(isset($_POST['save_student']))
{   
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);

    $query = "INSERT INTO pengguna (id,nama,username,password,usertype) VALUES ('$id','$nama','$username','$password','$usertype')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Akaun Pengguna Berjaya Dicipta";
        header("Location: accPelajar.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Akaun Pengguna Gagal Dicipta";
        header("Location: studentCreate.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
    $query = "UPDATE pengguna SET nama='$nama', username='$username', password='$password', usertype='$usertype' WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: accPelajar.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: accPelajar.php");
        exit(0);
    }

}

?>
