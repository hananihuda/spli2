<?php

include '../../config.php';
include'../../loginserver.php';

/*$targetDir="../../uploads/";
$fileName = basename($_FILES["gambar"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 $allowTypes = array('jpg','png','jpeg','gif','pdf');*/
$_SESSION['user']=$username;
$name=$_SESSION['username'];
/* ( [''] is the name we declared in the FORM )
 meanwhile
 ( $namapel is name in DB ) */

 // var kita set untuk pegang data form        ||    FORM       //
 $id_user=$_POST['id_user'];
$md=$_POST['md'];
$noic=$_POST['noic'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$tempatlahir=$_POST['tempatlahir'];
$email=$_POST['email'];
$notel=$_POST['notel'];
$umPm2=$_POST['umPm2'];
$umNi1=$_POST['umNi1'];
$umNi2=$_POST['umNi2'];
$moAm1=$_POST['moAm1'];
$moAm2=$_POST['moAm2'];
$moPm1=$_POST['moPm1'];
$moPm2=$_POST['moPm2'];
$moNi1=$_POST['moNi1'];
$moNi2=$_POST['moNi2'];
$lab1=$_POST['lab1'];
$lab2=$_POST['lab2'];
$radiog=$_POST['radiog'];
$radiol=$_POST['radiol'];



// maklumat ibu bapa
$id_user=$_POST['id_user'];
$namabapa=$_POST['namabapa'];
$noic_bapa=$_POST['noic_bapa'];
$pekerjaanbapa=$_POST['pekerjaanbapa'];
$notel_bapa=$_POST['notel_bapa'];
$namaibu=$_POST['namaibu'];
$noic_ibu=$_POST['noic_ibu'];
$pekerjaanibu=$_POST['pekerjaanibu'];
$notel_ibu=$_POST['notel_ibu'];
$neuro=$_POST['neuro'];
$obstre=$_POST['obstre'];
$ophtal=$_POST['ophtal'];
$ortho=$_POST['ortho'];
$paed=$_POST['paed'];
$plastic=$_POST['plastic'];
$urol=$_POST['urol'];
$psych=$_POST['psych'];
$onleave=$_POST['onleave'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$cover=$_POST['cover'];


$query= "INSERT INTO pelajar (
        id_user,
        md, /*dalam DB */
        noic,
        alamat,
        agama,
        tempatlahir
        email,
        notel,
        umPm2,
        umNi2,
        umNi2,
        moAm1,
        moAm2,
        moPm1,
        moPm2,
        moNi1,
        moNi2,
        lab1,
        lab2,
        radiog,
        radiol
        ) VALUES(
        '$id_user',
        '$md', /* yang kita set kat atas */
        '$noic', /* follow line 9 sampai 27 */
        '$alamat',
        '$agama',
        '$tempatlahir',
        '$email',
        '$notel',
        '$umPm2',
        '$umNi2',
        '$umNi2',
        '$moAm1',
        '$moAm2',
        '$moPm1',
        '$moPm2',
        '$moNi1',
        '$moNi2',
        '$lab1',
        '$lab2',
        '$radiog',
        '$radiol')";
$query2="INSERT INTO ibubapa(
        id_user,
        namabapa,
        noic_bapa,
        pekerjaanbapa,
        notel_bapa,
        namaibu,
        noic_ibu,
        pekerjaanibu,
        notel_ibu) VALUES(
        '$id_user',
        '$namabapa',
        '$noic_bapa',
        '$pekerjaanbapa',
        '$notel_bapa',
        '$namaibu',
        '$noic_bapa',
        '$pekerjaanibu',
        '$notel_ibu')";

$query_run=mysqli_query($conn,$query);
$query_run2=mysqli_query($conn,$query2);

 /*if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("UPDATE pelajar SET gambar = '".$fileName."' WHERE id_user = '$id_user'");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }*/
if ($query_run) {
    echo "Data Berjaya Disimpan";
    header('location:../pelajar/paparborangmaklumat.php');
}

else {
    echo "Data Tidak Berjaya Disimpan";
}

?>