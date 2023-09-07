<?php
include'../config.php';

$statusMsg='';

$targetDir="../panduanOJT/";
$fileName = basename($_FILES["panduan"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 $allowTypes = array('pdf','docx');






if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["panduan"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into panduanojt (panduan, tarikh_masuk) VALUES ('".$fileName."', NOW())");
            if($insert){
                header('location:admin_panduanojt.php');
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                echo "<a href='admin_panduanojt.php'>Kembali</a>";
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            echo "<a href='admin_panduanojt.php'>Kembali</a>";
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        echo "<a href='admin_panduanojt.php'>Kembali</a>";
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
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