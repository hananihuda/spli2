<?php
include'../loginserver.php';
include '../config.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../form.css">

<style>
    body{
        background-color:#c4b7a6;
    }

      p.form-control{
        text-align: left;
      }

</style>


  </head>
  <body>
    
<main>

  <div class="container-xl mb-4">
    <center><p>
      <h2>SISTEM PERSEDIAAN LATIHAN INDUSTRI</h2><p>
    </center>
    

   <nav class="navbar navbar-expand-sm bg-light rounded" aria-label="Twelfth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main For Creating Navigation Bar-->
        <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
          <ul class="navbar-nav">

            <!-- Nav Bar -->
            <li class="nav-item">
              <a class="nav-link" href="#">Panduan On-Job-Training(OJT)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Maklumat Syarikat Pelajar</a>
            </li>
            <li>
            <li class="nav-item">
              <a class="nav-link " href="listPenyelia.php">Senarai Penyelia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
      <a href="index.php" class="btn btn-danger float-end">Kembali</a>

<center>

    <div class="container mt-5">

  <div class="row">
        <div class="col-sm-6">
                <div class="card" style="width: 39rem;">
                    <div class="card-header">
                        <h4>Maklumat Pelajar</h4>
                    </div>
                    <div class="card-body">

         <?php
         $conn=mysqli_connect("localhost", "root", "", "spli");
         $id_user=$_GET['id_user'];
         $sql="SELECT * FROM pelajar WHERE id_user='$id_user'";
         $qr=mysqli_query($conn,$sql);
         $rs=mysqli_fetch_array($qr);
         ?>

<!-- Maklumat Pelajar -->

    <div class="form-group row">
      <label class="col-sm-3 col-form-label" >Nama Pelajar :</label>
        <div class="col-sm-9">
          <p class="form-control" name="namapel" >
          <?=$rs['namapel'];?>
        </div>

        <label class="col-sm-3 col-form-label" >No Kad Pengenalan :</label>
        <div class="col-sm-9">
          <p class="form-control" name="noic">
          <?=$rs['noic'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Tarikh Lahir :</label>
        <div class="col-sm-9">
          <p class="form-control" name="tarikhlahir">
          <?=$rs['tarikhlahir'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Tempat Lahir :</label>
        <div class="col-sm-9">
          <p class="form-control" name="tempatlahir">
          <?=$rs['tempatlahir'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Adik Beradik :</label>
        <div class="col-sm-9">
          <p class="form-control" name="adikberadik">
          <?=$rs['adikberadik'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Jantina</label>
        <div class="col-sm-9">
          <p class="form-control" name="jantina">
          <?=$rs['jantina'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Bangsa :</label>
        <div class="col-sm-9">
          <p class="form-control" name="bangsa">
          <?=$rs['bangsa'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Agama :</label>
        <div class="col-sm-9">
          <p class="form-control" name="agama">
          <?=$rs['agama'];?>
        </div>
        
        <label class="col-sm-3 col-form-label" >Alamat :</label>
        <div class="col-sm-9">
          <p class="form-control" name="alamat">
          <?=$rs['alamat'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Email :</label>
        <div class="col-sm-9">
          <p class="form-control" name="email">
          <?=$rs['email'];?>
        </div>

        <label class="col-sm-3 col-form-label" >No Telefon :</label>
        <div class="col-sm-9">
          <p class="form-control" name="notel">
          <?=$rs['notel'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Gambar :</label>
        <div class="col-sm-9">
          <p class="form-control" name="gambar">
          <?=$rs['gambar'];?>
        </div>
    </div>
      </div>
      </div>
  </div> <!-- penutup class line 73 --->

  <!-------------------------------------------------------- CARD MAKLUMAT PARENTS ---------------------------------------->

  <!------------------------------ Maklumat BAPA ---------------------------->
        <div class="col-sm-6">
                <div class="card" style="width: 39rem;">
                    <div class="card-header">
                        <h4>Maklumat Bapa</h4>
                    </div>
                    <div class="card-body">

         <?php
         $conn=mysqli_connect("localhost", "root", "", "spli");
         $id_user=$_GET['id_user'];
         $sql2="SELECT * FROM ibubapa WHERE id_user='$id_user'";
         $qr2=mysqli_query($conn,$sql2);
         $rs2=mysqli_fetch_array($qr2);
         ?>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label" >Nama Bapa :</label>
        <div class="col-sm-9">
          <p class="form-control" name="namabapa" >
          <?=$rs2['namabapa'];?>
        </div>

        <label class="col-sm-3 col-form-label" >No Kad Pengenalan :</label>
        <div class="col-sm-9">
          <p class="form-control" name="noic_bapa">
          <?=$rs2['noic_bapa'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Pekerjaan :</label>
        <div class="col-sm-9">
          <p class="form-control" name="pekerjaanbapa">
          <?=$rs2['pekerjaanbapa'];?>
        </div>

        <label class="col-sm-3 col-form-label" >No Telefon :</label>
        <div class="col-sm-9">
          <p class="form-control" name="notel_bapa">
          <?=$rs2['notel_bapa'];?>
        </div>

    </div>
      </div>
      </div>
      <br>

       <!------------------------------ Maklumat IBU ---------------------------->
        <div class="col-sm-12">
                <div class="card" style="width: 39rem;">
                    <div class="card-header">
                        <h4>Maklumat Ibu</h4>
                    </div>
                    <div class="card-body">

         <?php
         $conn=mysqli_connect("localhost", "root", "", "spli");
         $id_user=$_GET['id_user'];
         $sql2="SELECT * FROM ibubapa WHERE id_user='$id_user'";
         $qr2=mysqli_query($conn,$sql2);
         $rs2=mysqli_fetch_array($qr2);
         ?>

    <div class="form-group row">
      <label class="col-sm-3 col-form-label" >Nama Ibu :</label>
        <div class="col-sm-9">
          <p class="form-control" name="namaibu" >
          <?=$rs2['namaibu'];?>
        </div>

        <label class="col-sm-3 col-form-label" >No Kad Pengenalan :</label>
        <div class="col-sm-9">
          <p class="form-control" name="noic_ibu">
          <?=$rs2['noic_ibu'];?>
        </div>

        <label class="col-sm-3 col-form-label" >Pekerjaan :</label>
        <div class="col-sm-9">
          <p class="form-control" name="pekerjaanibu">
          <?=$rs2['pekerjaanibu'];?>
        </div>

        <label class="col-sm-3 col-form-label" >No Telefon :</label>
        <div class="col-sm-9">
          <p class="form-control" name="notel_ibu">
          <?=$rs2['notel_ibu'];?>
        </div>

    </div>
      </div>
      </div>

        </div> <!---- close card LINE 222 --->
        </div> <!--- close div LINE 172 ---->
      </div><!-- penutup class ROW --->

  </center>
</main>


    <script src="..\assets\dist\js\bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../form.js"></script>
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
      
  </body>
</html>
