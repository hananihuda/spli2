<?php

include('../config.php');

$id = $_GET['id'];
//$dbh=mysqli_connect("localhost", "fiveipdc_spli", "Uq67Y00RX", "fiveipdc_spli");

$sql = "DELETE FROM pengguna WHERE id = '$id'";
$query = mysqli_query($conn,$sql);
if ($query) {
  header("location:accPelajar.php");
}
else{
  echo "x berjaya dho";
}
?>