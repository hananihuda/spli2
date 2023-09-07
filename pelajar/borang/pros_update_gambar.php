<?php
include '../../config.php';

$noic = $_POST['noic'];
$gambar = $_FILES['gambar']; //panggil kat column dalam table ni
$sql = "SELECT * FROM pelajar WHERE noic = '$noic'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
$fileGambar = $row['gambar']; //panggil gambar kt row dia dalam table


if(isset($_FILES['gambar'])){

    //set
    $img_name = $_FILES['gambar']['name'];
    $img_size = $_FILES['gambar']['size'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];

    if($error === 0){
        
        $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex); //jika jenis gambar tu .JPG 

        //jenis gambar yang setup
        $allowed_exs = array('jpg','png','jpeg','gif','pdf');

        if(in_array($img_ex,$allowed_exs)){
            $fileName = $img_name;
            $targetDir="../../uploads/";
           
            //Jika gambar yang lama ada dalam directory
            if (file_exists('../../uploads/'.$fileGambar)) { echo unlink('../../uploads/'.$fileGambar) ? "OK" : "ERROR" ; }
            else{echo "$fileGambar is not found";}

            //update gambar yang baru
            $sqlUpdate = "UPDATE pelajar SET gambar = '$fileName' WHERE noic = '$noic'";
            $queryUpdate = mysqli_query($conn,$sqlUpdate);

            $img_upload_path = '../../uploads/'.$fileName;
           
            move_uploaded_file($tmp_name,$img_upload_path);

            header("location:../paparborangmaklumat.php?message=Gambar berjaya dikemaskini");
        }
        else{
            header("location:../paparborangmaklumat.php?error=Sila masukkan format fail yang betul");
        }
    }
}



?>