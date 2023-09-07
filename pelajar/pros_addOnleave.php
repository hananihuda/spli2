<?php

session_start();
include '../config.php';

if(isset($_POST['save_onleave']))
{   
    $id_user = mysqli_real_escape_string($conn, $_POST['id_user']);
    $onleave = mysqli_real_escape_string($conn, $_POST['onleave']);
    $date1 = mysqli_real_escape_string($conn, $_POST['date1']);
    $date2 = mysqli_real_escape_string($conn, $_POST['date2']);
    $cover = mysqli_real_escape_string($conn, $_POST['cover']);

    $query = "INSERT INTO ibubapa (id_user,onleave,date1,date2,cover) VALUES ('$id_user','$onleave','$date1','$date2','$cover')";

    $query_run2 = mysqli_query($conn, $query);
    if($query_run2)
    {
        echo "Akaun Pengguna Berjaya Dicipta";
        header("Location: paparborangmaklumat.php");
        exit(0);
    }
    else
    {
       echo "Akaun Pengguna Gagal Dicipta";
        header("Location: createOnleave.php");
        exit(0);
    }
}

if(isset($_POST['update_onleave']))
{
    $id_user = mysqli_real_escape_string($conn, $_POST['id_user']);

    $onleave = mysqli_real_escape_string($conn, $_POST['onleave']);
    $date1 = mysqli_real_escape_string($conn, $_POST['date1']);
    $date2 = mysqli_real_escape_string($conn, $_POST['date2']);
    $cover = mysqli_real_escape_string($conn, $_POST['cover']);
    $query = "UPDATE ibubapa SET onleave='$onleave', date1='$date1', date2='$date2', cover='$cover' WHERE id_user='$id_user' ";
    $query_run2 = mysqli_query($conn, $query);

    if($query_run2)
    {
        echo "Student Updated Successfully";
        header("Location: paparborangmaklumat.php");
        exit(0);
    }
    else
    {
        echo "Student Not Updated";
        header("Location: paparborangmaklumat.php");
        exit(0);
    }

}

?>
