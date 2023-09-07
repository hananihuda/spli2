<?php
include '../config.php';

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "DELETE FROM panduanojt WHERE id_panduan='".$_GET['id_panduan']."'";

if(mysqli_query($conn, $sql)){
    echo'<script>alert("Data berjaya hapus")</script>';
    header('Location:admin_panduanojt.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
if (isset($_GET["panduan"])) {
    $dirHandle = opendir("../panduanOJT");
    if ($dirHandle === false) {
        die("Unable to open directory");
    }

    $suratjawapan = $_GET['panduan'];
    $filePath = "../panduanOJT/" . $suratjawapan;

    if (file_exists($filePath)) {
        unlink($filePath);
        echo "File deleted successfully.";
    } else {
        echo "File not found.";
    }
}
?>