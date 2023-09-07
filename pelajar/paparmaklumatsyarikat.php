<!doctype html>
<html lang="en">
<?php
include'../loginserver.php';
include '../config.php';
session_start();

$_SESSION['user']=$username;
$name=$_SESSION["username"];
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>


    <style>
body {
  padding-bottom: 20px;
      background: linear-gradient(to right, CadetBlue, DarkGrey);
}

.navbar {
  margin-bottom: 20px;

}

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
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
              <a class="nav-link" href="panduanojt.php">Panduan On-Job Training(OJT)</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="paparborangmaklumat.php">Maklumat Pelajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="papar_resume.php">Resume Pelajar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="paparmaklumatsyarikat.php">Maklumat Syarikat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php" onclick="return confirm('Anda Pasti Mahu Log Keluar?')">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<center>
  <h3>MAKLUMAT SYARIKAT</h3>
    <?php

$query ="SELECT * FROM pelajar  WHERE id_user='".$_SESSION['username']."'";
$query_run=mysqli_query($conn,$query);

if (mysqli_num_rows($query_run)>0) {
  ?>
     <?php
              require '../config.php';

              $query ="SELECT * FROM syarikat LEFT JOIN pelajar ON pelajar.id_user=syarikat.id_user WHERE pelajar.id_user='".$_SESSION['username']."'";
              $query_run=mysqli_query($conn,$query);

              if (mysqli_num_rows($query_run)>0) {
                 foreach ($query_run as $maklumat) {
                   ?>
                            <div class="col-sm-7">
                              <div class="card border-dark">
                                 <div class="card-header bg-transparent border-success">
                                   <h5 class="card-title"><?= $maklumat['namasyarikat']?></h5>
                                 </div>
                                <div class="card-body">
                                  
                                  <p class="card-text text-start ">
                                    Alamat : <?= $maklumat['alamatsyarikat']?><br>
                                    Email : <?= $maklumat['emailsyarikat']?><br>
                                    No telefon syarikat : <?= $maklumat['notelsyarikat']?><br>
                                    Respon Syarikat : <?= $maklumat['responsyarikat']?><br>

                                  </p>
                                </div>
                                <div class="card-body">
                                  
                                  <p class="card-text text-start ">
                                    Nama Person In Charge : <?= $maklumat['namapic']?><br>
                                    nombor telefon : <?= $maklumat['notelpic']?><br>
                                    Email : <?= $maklumat['emailpic']?><br>
                                    Surat Jawapan :
                                    <?= (!empty($maklumat['suratjawapan']))
                                       ? '<a href="download.php?suratjawapan='.$maklumat["suratjawapan"].'">'.$maklumat['suratjawapan'].'</a><br>'
                                       : '<a href="insert_surat.php?id_syarikat='.$maklumat["id_syarikat"].'">Hantar Surat Jawapan</a><br>';
                                     ?>
                                  </p>
                                </div>
                                  <div class="card-footer bg-transparent border-success">
                                    <a href="form_updatems.php?id_syarikat=<?php echo $maklumat["id_syarikat"];?>" class="btn btn-primary ">Kemaskini</a>
                                    <a href="pros_deletems.php?id_syarikat=<?php echo $maklumat["id_syarikat"];?>&suratjawapan=<?php echo $maklumat["suratjawapan"];?>"class="btn btn-danger" onclick="return confirm('Anda Pasti Mahu Hapus?')">Hapus</a>
                                  </div>
                                    
                                
                              </div>
                            </div>
                            <br>

                   <?php
                 }
               }else{
                ?>
                            <div class="col-sm-7">
                              <div class="card border-danger">
                                 <div class="card-header bg-transparent border-danger">
                                   <h5 class="card-title">Tiada Maklumat</h5>
                                 </div>
                                <div class="card-body">
                                  
                                  <p class="card-text text-start ">
                                      <h5>Sila Tambah Maklumat Syarikat</h5>
                                  </p>
                                </div>
                                    
                                
                              </div>
                            </div>

                <?php
               } 

            ?>
            <br>
            <a href="maklumatsyarikat.php" class="btn btn-primary">Tambah Syarikat</a>
       <?php 
}else{
  ?>
  <br>
      <h5>Sila Isi Borang Maklumat Pelajar Terlebih Dahulu</h5>
    <button class="btn btn-light"><a href="homepagestudent.php">KEMBALI</a></button>
  <?php
}

?>

</center>
</main>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  </body>
  
    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: hsla(0, 0%, 0%, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href=""> Sistem Persediaan Latihan Industri Kolej Vokasional Shah Alam</a>
  </div>
  <!-- Copyright -->
</footer>
  
  
</html>
