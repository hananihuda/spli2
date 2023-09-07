<?php
include'../config.php';
// $statusMsg='';

// $targetDir="../offer_uploads/";
// $fileName = basename($_FILES["suratjawapan"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
//  $allowTypes = array('jpg','png','jpeg','pdf');
session_start();

$_SESSION['user']=$username;
$name=$_SESSION["username"];

$conn= mysqli_connect('localhost','root','','edash');
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

// variable kita set untuk pegang data form        ||    FORM       //
$id_user=$_SESSION['username'];
$namasyarikat=$_POST['namasyarikat'];
$alamatsyarikat=$_POST['alamatsyarikat'];
$emailsyarikat=$_POST['emailsyarikat'];
$notelsyarikat=$_POST['notelsyarikat'];
$namapic=$_POST['namapic'];
$notelpic=$_POST['notelpic'];
$emailpic=$_POST['emailpic'];
// $suratjawapan=$_FILES['suratjawapan'];
$responsyarikat=$_POST['responsyarikat'];


/* attribut without '$' in () is from DB
        meanwhile
'$namapel' is from FORM */


$query= "INSERT INTO syarikat (/*dalam DB */
         id_user,
         namasyarikat,
         alamatsyarikat,
         emailsyarikat,
         notelsyarikat,
         namapic,
         notelpic,
         emailpic,
         responsyarikat) VALUES(/* follow line 9 sampai 27 */
        '$id_user',
        '$namasyarikat',
        '$alamatsyarikat',
        '$emailsyarikat',
        '$notelsyarikat',
        '$namapic',
        '$notelpic',
        '$emailpic',
        '$responsyarikat')";

$query_run=mysqli_query($conn,$query);

// if(in_array($fileType, $allowTypes)){
//         // Upload file to server
//         if(move_uploaded_file($_FILES["suratjawapan"]["tmp_name"], $targetFilePath)){
//             // Insert image file name into database
//             $insert = $conn->query("UPDATE syarikat SET suratjawapan = '".$fileName."' WHERE id_user = '$id_user'");
//             if($insert){
//                 $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
//             }else{
//                 $statusMsg = "File upload failed, please try again.";
//             } 
//         }else{
//             $statusMsg = "Sorry, there was an error uploading your file.";
//         }
//     }else{
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//     }

if ($query_run) {
    echo "Data Berjaya Disimpan";
    // echo $statusMsg;
    header('location:paparmaklumatsyarikat.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
    // echo $statusMsg;
}

?>