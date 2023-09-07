<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "spli");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$result=mysqli_query($link,"SELECT * FROM syarikat  WHERE id_syarikat='".$_GET['id_syarikat']."'");
$sql = "DELETE  FROM syarikat WHERE id_syarikat='".$_GET['id_syarikat']."'";
if(mysqli_query($link, $sql)){
    echo'<script>alert("Data berjaya hapus")</script>';
    header('Location:paparmaklumatsyarikat.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
// mysqli_close($link);
if (isset($_GET["suratjawapan"])) {
    $dirHandle = opendir("../offer_uploads");
    if ($dirHandle === false) {
        die("Unable to open directory");
    }

    $suratjawapan = $_GET['suratjawapan'];
    $filePath = "../offer_uploads/" . $suratjawapan;

    if (file_exists($filePath)) {
        unlink($filePath);
        echo "File deleted successfully.";
    } else {
        echo "File not found.";
    }
}
?>

