<?php

include('includes/config.php');

$id_resume= $_GET['id_resume'];
$db=mysqli_connect("localhost", "root", "", "spli");

$sql = "DELETE FROM resume WHERE id_resume = '$id_resume'";
$query = mysqli_query($db,$sql);
if ($query) {
  header("location:papar_resume.php");
}
else{
  echo "Gagal";
}
?
>