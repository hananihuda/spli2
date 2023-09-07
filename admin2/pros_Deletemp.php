<?php

include('../config.php');

$id_user = $_GET['id_user'];
$dbh=mysqli_connect("localhost", "root", "", "edash");

$sql = "DELETE FROM pelajar WHERE id_user ='".$_GET['id_user']."'";
$query = mysqli_query($dbh,$sql);
if ($query) {
  header("location:pelajar.php");
}
else{
  echo "Gagal";
}
?>