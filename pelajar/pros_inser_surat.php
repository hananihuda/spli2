<?php
include'../config.php';
if(isset($_POST["id_syarikat"]) && !empty($_FILES["suratjawapan"]["name"])){
$statusMsg='';

$targetDir="../offer_uploads/";
$fileName = basename($_FILES["suratjawapan"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 $allowTypes = array('jpg','png','jpeg','pdf');

$id_syarikat=$_POST['id_syarikat'];





if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["suratjawapan"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("UPDATE syarikat SET suratjawapan = '".$fileName."' WHERE id_syarikat = '$id_syarikat'");
            if($insert){
                header('location:paparmaklumatsyarikat.php');
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                echo "<a href='paparmaklumatsyarikat.php'>Kembali</a>";
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            echo "<a href='paparmaklumatsyarikat.php'>Kembali</a>";
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        echo "<a href='paparmaklumatsyarikat.php'>Kembali</a>";
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }


    }else{
    $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;

// if ($) {
//     echo "Data Berjaya Disimpan";
//     // 
//     header('location:paparmaklumatsyarikat.php');
// }

// else {
//     echo "Data Tidak Berjaya Disimpan";
//     // echo $statusMsg;
// }

?>